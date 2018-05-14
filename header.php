<!doctype html>
<html lang="et">
	<head>
		<meta charset="utf-8" />
		<title><?php bloginfo('name');?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117447443-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-117447443-1');
		</script>


		<?php wp_head(); ?>
	</head>


	<body class="<?php if(is_front_page()): echo 'nm-fp__body'; endif; ?>">

		<div class="nm-pageBg">
			<svg class="nm-pageBg__svg" viewBox="0 0 100 100" preserveAspectRatio="none"
			xmlns:nmdata="http://www.noormeister.ee" style="width:100%; height: 100vh;">
				
				
				<!-- <defs>
					<pattern id="Pattern-1" height="0.1" width="0.056" 
					
					patternContentUnits="objectBoundingBox" 
         			viewBox="0 0 56 100" 
					preserveAspectRatio="xMinYMin slice" 
					style="transform:rotate(-30deg) scaleX(0.6)">
						<rect width='56' height='100' fill='hsl(207, 100%, 40%)'/>
						<path d='M28 66L0 50L0 16L28 0L56 16L56 50L28 66L28 100' fill='none' stroke='hsla(0, 0%, 100%, 0.06)' stroke-width='4'/>
						<path d='M28 0L28 34L0 50L0 84L28 100L56 84L56 50L28 34' fill='none' stroke='hsla(0, 0%, 100%, 0.04)' stroke-width='2'/>
					</pattern>


					<pattern id="Pattern-2" height="0.2" width="0.2" 
					patternContentUnits="userSpaceOnUse" 
         			viewBox="0 0 100 100" 
					preserveAspectRatio="xMinYMin slice">
						<path d="M4,18.866l23,13.763l25,-14.96l25,14.96l23.973,-14.345l2.054,3.432l-26.027,15.575l-25,-14.96l-25,14.96l-27,-16.157l0,-21.134l4,0l0,18.866Z" />
	<path d="M103.027,78.284l-2.054,3.432l-23.973,-14.345l-25,14.96l-25,-14.96l-23,13.763l0,18.866l-4,0l0,-21.134l27,-16.157l25,14.96l25,-14.96l26.027,15.575Z"/><rect x="25" y="34.96" width="4" height="30"/><rect x="75" y="34.96" width="4" height="30"/><rect x="50" y="0" width="4" height="20"/><rect x="50" y="80" width="4" height="20"/>
					
					</pattern>

				</defs> -->

					<?php if ( is_front_page() ): ?>
						<path d="M0,0 H100 V100 H0"  style="fill:hsl(207, 100%, 40%)"></path>
						<!-- <path d="M0,0 H100 V100 H0" fill="url(#Pattern-1)" ></path> -->

						<path nmdata:axis="y" 
							nmdata:startpos="0" 
							nmdata:duration="160" 
							nmdata:p1end="30" 
							nmdata:p2end="20"
							nmdata:p1shift="0"
							nmdata:p2shift="0" 
							class="nm-svgBg" 
							d="" 
							style="fill:hsla(207, 100%, 50%, 1);"></path>
						<path nmdata:axis="y" 
							nmdata:startpos="100" 
							nmdata:duration="140" 
							nmdata:p1end="88" 
							nmdata:p2end="80"
							nmdata:p1shift="0"
							nmdata:p2shift="-15" 
							class="nm-svgBg" 
							d="" 
							style="fill:hsla(207, 100%, 30%, 1);"
							></path>

					<?php elseif( is_page('kava') ): ?>
						<!-- <path class="nm-svgBg" d="" style="fill:hsla(207, 100%, 60%, 1);"
							nmdata:axis="x" nmdata:startpos="100" nmdata:duration="150" nmdata:p1end="87" nmdata:p2end="80"></path>
						<path class="nm-svgBg" d="" fill="url(#Pattern-1)"
							nmdata:axis="y" 
							nmdata:startpos="100" 
							nmdata:duration="150" 
							nmdata:p1end="80" 
							nmdata:p2end="86"
							nmdata:p1shift="0"
							nmdata:p2shift="-5" 
						></path> -->
						
						<!-- <path class="nm-svgBg" d="" style="fill:hsl(0, 0%, 92%);"
						nmdata:axis="y" 
							nmdata:startpos="0" 
							nmdata:duration="150" 
							nmdata:p1end="35" 
							nmdata:p2end="27"
							nmdata:p1shift="0"
							nmdata:p2shift="0" 
						></path> -->
						<path class="nm-svgBg" d="" style="fill:hsl(0, 0%, 90%);"
							nmdata:axis="x" nmdata:startpos="100" nmdata:duration="120" nmdata:p1end="86" nmdata:p2end="79"></path>
						<path class="nm-svgBg" d="" style="fill:hsl(207, 100%, 40%);"
							nmdata:axis="y" 
							nmdata:startpos="100" 
							nmdata:duration="200" 
							nmdata:p1end="90" 
							nmdata:p2end="86"
							nmdata:p1shift="0"
							nmdata:p2shift="-15" 
						></path>
						
						<!-- <circle cx="20" cy="20" r="16" style="fill:hsl(46, 100%, 69%);"></circle> -->
					<?php elseif( is_page('kuidas-tulla') ): ?>
						<path class="nm-svgBg" d="" style="fill:hsla(0, 0%, 90%, 1);"
							nmdata:axis="x" nmdata:startpos="100" nmdata:duration="150" nmdata:p1end="70" nmdata:p2end="50"
						></path>

					<?php elseif( is_page('kutsevoistlused') ): ?>
						<path class="nm-svgBg" d="" style="fill:hsla(207, 100%, 40%, 1);"
							nmdata:axis="x" nmdata:startpos="100" nmdata:duration="250" nmdata:p1end="90" nmdata:p2end="75"
						></path>
						<path class="nm-svgBg" d="" style="fill:hsla(207, 100%, 33%, 1);"
							nmdata:axis="y" 
							nmdata:startpos="100" 
							nmdata:duration="150" 
							nmdata:p1end="90" 
							nmdata:p2end="70"
							nmdata:p1shift="0"
							nmdata:p2shift="0" 
						></path>

					<?php elseif( is_page('oskuste-festival') ): ?>
						<path class="nm-svgBg" d="" style="fill:hsl(0, 0%, 92%);"
							nmdata:axis="x" nmdata:startpos="100" nmdata:duration="150" nmdata:p1end="80" nmdata:p2end="70"
						></path>
						<path class="nm-svgBg" d="" style="fill:hsl(207, 100%, 40%);"
							nmdata:axis="y" 
							nmdata:startpos="100" 
							nmdata:duration="300" 
							nmdata:p1end="88" 
							nmdata:p2end="80"
							nmdata:p1shift="0"
							nmdata:p2shift="0" 
						></path>

					<?php else: ?>
						<path class="nm-svgBg" d="" style="fill:hsla(0, 0%, 88%, 1);"
							nmdata:axis="x" nmdata:startpos="100" nmdata:duration="100" nmdata:p1end="80" nmdata:p2end="70"
						></path>
						<path class="nm-svgBg" d="" style="fill:hsla(207, 100%, 40%, 1);"
							nmdata:axis="y" 
							nmdata:startpos="100" 
							nmdata:duration="180" 
							nmdata:p1end="96" 
							nmdata:p2end="70"
							nmdata:p1shift="0"
							nmdata:p2shift="0" 
						></path>
					<?php endif ?>

			</svg>
		</div>



		<header class="container-fluid nm-headerTop" <?php if(is_front_page()) echo 'style="padding-top:0;"'; ?> >
			<div class="container">
				<div class="row nm-headerTop__logo align-items-center" <?php if(is_front_page()) echo 'style="display:none;"'; ?> >
					<div class="col-6 col-sm-4 col-lg-2">
						<a href="<?php echo home_url(); ?>">
							<img class="nm-headerTop__logo__img" src="<?php echo get_template_directory_uri(); ?>/images/nm-logo-17_neg_alternative.svg" alt="Noor Meister 2018" />
						</a>
					</div>
					<div class="col-6 col-sm-8 col-lg-10">
						<h4 class="nm-headerTop__date">3.-4. mail Tallinnas</h4>
					</div>
				</div>

				<div class="row nm-headerTop__nav">
					<div class="col-sm">
						<!-- hide the desktop menu -->
						<?php 
							//if ( is_user_logged_in() ) {
								wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
							//} 
						?>
					</div>
				</div>
			</div>
		</header>
		
		<!-- hide the mobile menu launcher -->
		<?php //if (is_user_logged_in()): ?>
		<a class="nm-navSwapper" href="#">
			<svg viewBox="0 0 56 48">
        		<g fill="#ffffff">
          			<rect x="0" y="0" width="56" height="10"></rect>
          			<rect x="0" y="19" width="56" height="10"></rect>
          			<rect x="0" y="38" width="56" height="10"></rect>
        		</g>
      		</svg>
		</a>
		<?php //endif ?>

		<?php if (is_front_page()): ?>

		<section class="nm-fpIntro">

			<div class="nm-fpIntro__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/nm-logo-2018_neg.svg" alt="Noor Meister 2018 - oskuste festival" />
			</div>

			<div class="nm-fpIntro__texts">
				<div class="nm-fpIntro__when">
					<h2><span style="font-size:90%;">Selleks aastaks on oskuste festival „Noor meister 2018“ lõppenud.</span></h2>
					<h3>Aitäh kõikidele, kes kohale tulid!</h3>
					<!-- <h2>3.-4. mail Tallinnas</h2>
					<h4>Eesti Näituste messikeskuses</h4>
					<h3>SISSEPÄÄS TASUTA!</h3> -->
					<a href="#nm-fpInfo" class="nm-scrollBtn btn btn-primary btn-lg nm-fpIntro__btn">Mis toimus?</a>
				</div>

				<hr style="width: 100%"/>

				<div class="nm-fpIntro__logos">
					
					<div class="nm-fpIntro__esf">
						<img class="nm-fpIntro__esf--hor"
							src="<?php echo get_template_directory_uri(); ?>/images/logo/esf_logo.svg" />
					</div>

					<div class="nm-fpIntro__ev100">
						<img 
							src="<?php echo get_template_directory_uri(); ?>/images/logo/ev100_logo_white.svg" />
					</div>
					
				</div>
			</div>

			<?php include_once( dirname(__FILE__) . '/inc/social.php'); ?>
		</section>
		
		
		<section class="container-fluid nm-fpInfo" id="nm-fpInfo">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-4 nm-fpInfo__block">
						<img src="<?php echo get_template_directory_uri(); ?>/images/elements/icons/material-grain.svg" alt="">
						<h4>KUTSE&shy;MEISTRI&shy;VÕISTLUSED</h4>
						<h5>Eesti kutsemeistrivõistlused 31&nbsp;erialal ligi 300&nbsp;võistlejaga</h5>
						<a href="<?php echo get_site_url(); ?>/kutsevoistlused" class="btn btn-primary nm-fpInfo__btn">VAATA</a>
					</div>
					<div class="col-sm-12 col-md-4 nm-fpInfo__block">
						<img src="<?php echo get_template_directory_uri(); ?>/images/elements/icons/material-blur.svg" alt="">
						<h4>OSKUSTE FESTIVAL</h4>
						<h5>Põnevad töötoad, õpilasfirmad ja edukad praktikud</h5>
						<a href="<?php echo get_site_url(); ?>/oskuste-festival" class="btn btn-primary nm-fpInfo__btn">VAATA</a>
					</div>
					<div class="col-sm-12 col-md-4 nm-fpInfo__block">
						<img src="<?php echo get_template_directory_uri(); ?>/images/elements/icons/material-star-border.svg" alt="">
						<h4>LAVAPROGRAMM</h4>
						<h5>Kahepäevane meeleolukas lavaprogramm</h5>
						<a href="<?php echo get_site_url(); ?>/kava" class="btn btn-primary nm-fpInfo__btn">TUTVU</a>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-sm-12 nm-fpInfo__btn">
						<h3 style="color:#fff;">Lisainfo peagi tulekul!</h3>
						<a href="<?php echo get_site_url(); ?>/kava" class="btn btn-primary btn-lg nm-fpIntro__btn">Tutvu kavaga</a>
					</div>
				</div> -->
			</div>
		</section>


		<?php endif ?>


		<section class="nm-mainContent">
