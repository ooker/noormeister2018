<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title><?php bloginfo('name');?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="google-site-verification" content="77raGIaSvZucOR4VaSrXlTJI1341fzonVVUCQx8KtWI" />
		<link rel="sitemap" href="sitemap.xml" type="application/xml" />
		<link rel="shortcut icon" href="/favicon.ico" />

		<?php wp_head(); ?>
	</head>


	<body class="<?php if(is_front_page()): echo 'nm-fp__body'; endif; ?>">

		<div class="nm-pageBg">
			<svg class="nm-pageBg__svg" viewBox="0 0 100 100" preserveAspectRatio="none"
			xmlns:nmdata="http://www.noormeister.ee">

					<?php if ( is_front_page() ): ?>
						<path d="M0,0 H100 V100 H0" style="fill:hsl(207, 100%, 40%);"></path>
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
							style="fill:hsla(207, 100%, 32%, 1);"></path>

					<?php elseif( is_page('kava') ): ?>
						<path class="nm-svgBg" d="" style="fill:hsla(207, 100%, 60%, 1);"
							nmdata:axis="x" nmdata:startpos="100" nmdata:duration="150" nmdata:p1end="87" nmdata:p2end="80"></path>
						<path class="nm-svgBg" d="" style="fill:hsla(207, 100%, 50%, 1);"
							nmdata:axis="y" 
							nmdata:startpos="100" 
							nmdata:duration="150" 
							nmdata:p1end="80" 
							nmdata:p2end="86"
							nmdata:p1shift="0"
							nmdata:p2shift="-5" 
						></path>
						
						<path style="fill:hsl(46, 100%, 69%);" 
						d=M100,0 V0 L" + valRight + ",0 L" + valLeft + ",100"></path>
						
						<!-- <circle cx="20" cy="20" r="16" style="fill:hsl(46, 100%, 69%);"></circle> -->
					<?php elseif( is_page('kuidas-tulla') ): ?>
						<path class="nm-svgBg" d="" style="fill:hsla(83, 49%, 49%, 0.75);"
							nmdata:axis="x" nmdata:startpos="100" nmdata:duration="150" nmdata:p1end="70" nmdata:p2end="50"
						></path>

					<?php elseif( is_page('kontakt') ): ?>
						<path class="nm-svgBg" d="" style="fill:hsla(83, 49%, 49%, 0.85);"
							nmdata:axis="x" nmdata:startpos="100" nmdata:duration="300" nmdata:p1end="80" nmdata:p2end="55"
						></path>
						<path class="nm-svgBg" d="" style="fill:hsla(38, 100%, 58%, 0.55);"
							nmdata:axis="y" 
							nmdata:startpos="100" 
							nmdata:duration="250" 
							nmdata:p1end="100" 
							nmdata:p2end="60"
							nmdata:p1shift="0"
							nmdata:p2shift="0" 
						></path>

					<?php elseif( is_page('tootoad') ): ?>
						<path class="nm-svgBg" d="" style="fill:hsla(83, 49%, 49%, 0.85);"
							nmdata:axis="x" nmdata:startpos="100" nmdata:duration="150" nmdata:p1end="80" nmdata:p2end="70"
						></path>
						<path class="nm-svgBg" d="" style="fill:hsla(83, 49%, 49%, 0.85);"
							nmdata:axis="y" 
							nmdata:startpos="100" 
							nmdata:duration="300" 
							nmdata:p1end="70" 
							nmdata:p2end="55"
							nmdata:p1shift="0"
							nmdata:p2shift="0" 
						></path>

					<?php else: ?>
						<path class="nm-svgBg" d="" style="fill:hsla(83, 49%, 49%, 0.85);"
							nmdata:axis="x" nmdata:startpos="100" nmdata:duration="150" nmdata:p1end="80" nmdata:p2end="70"
						></path>
						<path class="nm-svgBg" d="" style="fill:hsla(83, 49%, 49%, 0.85);"
							nmdata:axis="y" 
							nmdata:startpos="100" 
							nmdata:duration="320" 
							nmdata:p1end="100" 
							nmdata:p2end="60"
							nmdata:p1shift="0"
							nmdata:p2shift="0" 
						></path>
					<?php endif ?>

			</svg>
		</div>



		<header class="container-fluid nm-headerTop" <?php if(is_front_page()) echo 'style="padding-top:0;"'; ?> >
			<div class="container">
				<div class="row nm-headerTop__logo align-items-center" <?php if(is_front_page()) echo 'style="display:none;"'; ?> >
					<div class="col-5 col-sm-4 col-lg-2">
						<a href="<?php echo home_url(); ?>">
							<img class="nm-headerTop__logo__img" src="<?php echo get_template_directory_uri(); ?>/images/nm-logo-17_neg_alternative.svg" alt="Noor Meister 2018" />
						</a>
					</div>
					<div class="col-7 col-sm-8 col-lg-10">
						<h4 class="nm-headerTop__date">3.-4. mail Tallinnas</h4>
					</div>
				</div>

				<div class="row nm-headerTop__nav">
					<div class="col-sm">
						<!-- hide the desktop menu -->
						<?php 
							if ( is_user_logged_in() ) {
								wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
							} ?>
					</div>
				</div>
			</div>
		</header>
		
		<!-- hide the mobile menu launcher -->
		<?php if (is_user_logged_in()): ?>
		<a class="nm-navSwapper" href="#">
			<svg viewBox="0 0 56 48">
        		<g fill="#ffffff">
          			<rect x="0" y="0" width="56" height="10"></rect>
          			<rect x="0" y="19" width="56" height="10"></rect>
          			<rect x="0" y="38" width="56" height="10"></rect>
        		</g>
      		</svg>
		</a>
		<?php endif ?>

		<?php if (is_front_page()): ?>

		<section class="nm-fpIntro">

			<div class="nm-fpIntro__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/nm-logo-2018_neg.svg" alt="Noor Meister 2018 - oskuste festival" />
			</div>

			<div class="nm-fpIntro__texts">
				<div class="nm-fpIntro__when">
					<h2>3.-4. mail Tallinnas</h2>
					<h4>Eesti Näituste messikeskuses</h4>
					<h3>SISSEPÄÄS TASUTA!</h3>
					<a href="#nm-fpInfo" class="nm-scrollBtn btn btn-primary btn-lg nm-fpIntro__btn">Mis toimub?</a>
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
					</div>
					<div class="col-sm-12 col-md-4 nm-fpInfo__block">
						<img src="<?php echo get_template_directory_uri(); ?>/images/elements/icons/material-blur.svg" alt="">
						<h4>OSKUSTE FESTIVAL</h4>
						<h5>Põnevad töötoad, õpilasfirmad ja edukad praktikud</h5>
					</div>
					<div class="col-sm-12 col-md-4 nm-fpInfo__block">
						<img src="<?php echo get_template_directory_uri(); ?>/images/elements/icons/material-star-border.svg" alt="">
						<h4>LAVAPROGRAMM</h4>
						<h5>Kahepäevane meeleolukas lavaprogramm</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 nm-fpInfo__btn">
						<h3 style="color:#fff;">Lisainfo peagi tulekul!</h3>
						<!-- <a href="<?php echo get_site_url(); ?>/kava" class="btn btn-primary btn-lg nm-fpIntro__btn">Tutvu kavaga</a> -->
					</div>
				</div>
			</div>
		</section>


		<?php endif ?>


		<section class="nm-mainContent">
