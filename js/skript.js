(function( $ ) {

/*
  Watch for media query change when mobile menu is open and user resizes
  the browser from md to lg we hide the mobile menu.
*/
function initMediaQueryChanges(){
  var mql = window.matchMedia("(min-width: 992px)");
  mql.addListener(handleMediaChange);
  handleMediaChange(mql);
}
function handleMediaChange(mediaQueryList) {
  if (mediaQueryList.matches) {
    if( $(".nm-headerTop__nav").hasClass("nm-headerTop__nav--active") ){
      $(".nm-headerTop__nav").removeClass("nm-headerTop__nav--active");
    }
  }
}


/*
  Bootstrap modals that display content through the WP REST API
*/
function initModals(){
  $(".nm-modal-opener").on("click", function(e){
    e.preventDefault();
    $('#myModal').modal('toggle');
    var type = $(this).data("modal-type");
    var id = $(this).data("id");
    var index = $(this).index();
    getModalContent(type, id, index);
  });

  $('#myModal').on('hidden.bs.modal', function (e) {
    $( '.modal-title' ).html( "<i>Üks moment</i>" );
    $( '.modal-body' ).html( "<i>laen inffi...</i>" );
  });

  $(".nm-modal__btnNext").on("click", function(e){
    $(this).prop("disabled", true);
    var nextIndex;
    if(parseInt( $('.nm-modalFooter').data("callerindex") ) < $(".nm-rest__listItem").length-1){
      nextIndex = parseInt( $('.nm-modalFooter').data("callerindex") ) + 1;
    } else {
      nextIndex = 0;
    }
    var nextPostId = $('.nm-rest__listItem').eq(nextIndex).data("id");
    var nextPostType = $('.nm-rest__listItem').eq(nextIndex).data("modal-type");
    getModalContent(nextPostType, nextPostId, nextIndex);
  });
  $(".nm-modal__btnPrev").on("click", function(e){
    $(this).prop("disabled", true);
    var nextIndex;
    if(parseInt( $('.nm-modalFooter').data("callerindex") ) > 0){
      nextIndex = parseInt( $('.nm-modalFooter').data("callerindex") ) - 1;
    } else {
      nextIndex = $(".nm-rest__listItem").length-1;
    }
    //var nextIndex = parseInt( $('.nm-modalFooter').data("callerindex") ) - 1;
    var nextPostId = $('.nm-rest__listItem').eq(nextIndex).data("id");
    var nextPostType = $('.nm-rest__listItem').eq(nextIndex).data("modal-type");
    getModalContent(nextPostType, nextPostId, nextIndex);
  });
}

function initResponsiveNav(){
  var burger = $(".nm-navSwapper");
  var menu = $(".nm-headerTop__nav");
  burger.on("click", function (e) {
    e.preventDefault();
    menu.toggleClass("nm-headerTop__nav--active");
  });
}

function initOwlCarousel(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:4000,
    margin:20,
    slideBy:4,
    responsiveClass:true,
    responsive:{
      0:{
        items:3,
        nav:false
      },
      600:{
        items:5,
        nav:false
      },
      1000:{
        items:10,
        nav:false,
        loop:true
      },
      1900:{
        items:10,
        nav:false,
        loop:true
      }
    }
  });
}

function getModalContent(type, id, index) {
  var postUrl;
  if(location.host.indexOf("localhost") >= 0){
    postUrl = "http://localhost/nm18/wp-json/wp/v2/"+type+"/"+id;
  } else {
    postUrl = "http://noormeister.ee/wp-json/wp/v2/"+type+"/"+id;
  }
  
  $.ajax( {
    url: postUrl,
    //contentType: "application/json;charset=utf-8",
    dataType: "json",
    success: function ( restData ) {
      // var post = data.shift();
      // $( '#quote-title' ).text( post.title );
      $( '.nm-modalFooter' ).data("callerindex", index);
      $( '.modal-body' ).html( restData.content.rendered );
      $( '.modal-title' ).html( restData.title.rendered );
      //console.log(restData);
      $('.nm-modal__btnPrev').prop("disabled", false);
      $('.nm-modal__btnNext').prop("disabled", false);
      

      /* 
        This is ugly, but
        if we have a gallery then reinit Responsive gallery grid plugin
      */
      if(restData.content.rendered.indexOf("rgg-imagegrid") >= 0){
        setTimeout(function(){
          window.$grids = jQuery('.rgg-imagegrid');
          jQuery(window).trigger("resize");
          console.log(window.$grids);
        },500);
        
      }

    },
    cache: true
  } );
}

function initScrollButtons(){
  $(".nm-scrollBtn").on('click',  function(e) {
    var id = $(this).attr('href');
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }
    e.preventDefault();

    var pos = $id.offset().top;
    $('body, html').animate({scrollTop: pos}, 1000);
  });
}

$(document).ready(function() {

  initMediaQueryChanges();
  initModals();
  initResponsiveNav();
  animateBackground();
  initOwlCarousel();
  initScrollButtons();
});

})( jQuery );



/* Animating SVG backgrounds */
function animateBackground() {
  var smwBgPaths = [];
  var smwAnimatedPaths = document.querySelectorAll(".nm-svgBg");
  Array.prototype.forEach.call(smwAnimatedPaths, function (el, i) {
    smwBgPaths.push(new Object());
    smwBgPaths[i].el = el;
    smwBgPaths[i].frame = 0;
    smwBgPaths[i].startP = parseInt(el.getAttribute("nmdata:startpos"));
    smwBgPaths[i].endP1 = parseInt(el.getAttribute("nmdata:p1end"));
    smwBgPaths[i].endP2 = parseInt(el.getAttribute("nmdata:p2end"));
    smwBgPaths[i].shiftP1 = parseInt(el.getAttribute("nmdata:p1shift"));
    smwBgPaths[i].shiftP2 = parseInt(el.getAttribute("nmdata:p2shift"));
    smwBgPaths[i].duration = parseInt(el.getAttribute("nmdata:duration"));
    smwBgPaths[i].axis = el.getAttribute("nmdata:axis");



    setTimeout(function(){
      if(smwBgPaths[i].axis == "y"){
        smwBgAnimY(smwBgPaths[i]);
      } else {
        smwBgAnimX(smwBgPaths[i]);
      }
      //smwBgAnimXY(smwBgPaths[i]);
    }, 400);
  });
  //console.table(smwBgPaths);
}


function smwBgAnimY(obj) {
  var t = obj.frame / obj.duration;
  t = easeOutQuad(t);
  var valRight = obj.startP + t * (obj.endP2 - obj.startP);
  var valLeft = obj.startP + t * (obj.endP1 - obj.startP);
  var shiftRight = 100+obj.shiftP2;
  var shiftLeft = obj.shiftP1;
  obj.frame++;

  obj.el.setAttribute("d", "M0,"+obj.startP+" H100 L"+shiftRight+","+valRight+" L"+shiftLeft+","+valLeft+"");

  if (Math.abs(valRight) == obj.endP2) {
    cancelAnimationFrame(function () {
      smwBgAnimY(obj);
    });
  } else {
    requestAnimationFrame(function () {
      smwBgAnimY(obj);
    });
  }
}

function smwBgAnimX(obj) {
  var t = obj.frame / obj.duration;
  t = easeOutQuad(t);
  var valRight = obj.startP + t * (obj.endP2 - obj.startP);
  var valLeft = obj.startP + t * (obj.endP1 - obj.startP);
  obj.frame++;

  obj.el.setAttribute("d", "M100,100 V0 L" + valRight + ",0 L" + valLeft + ",100");

  if (Math.abs(valRight) == obj.endP2) {
    cancelAnimationFrame(function () {
      smwBgAnimX(obj);
    });
  } else {
    requestAnimationFrame(function () {
      smwBgAnimX(obj);
    });
  }
}




/*
 easings - thanks to Josh Marinacci & Robert Penner
 http://www.joshondesign.com/2013/03/01/improvedEasingEquations
*/
function easeInCubic(t) {
  return Math.pow(t, 3);
}
function easeOutCubic(t) {
  return 1 - easeInCubic(1 - t);
}
function easeInQuad(t) {
  return t * t;
}
function easeOutQuad(t) {
  return 1 - easeInQuad(1 - t);
}
