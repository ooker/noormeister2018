		</section><!-- /.nm-mainContent-->

		<!-- Sponsorite logod -->
		<section class="container-fluid nm-footer__logobar">

			<div id="carousel_container" class="owl-carousel" >
				<?php

				$args = array( 'post_type' => 'toetaja', 'posts_per_page' => -1 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
						echo '<img class="item" src="' . get_the_post_thumbnail_url() . '" alt="'. get_the_title() .'">';
				endwhile;

					/*$handle = opendir(dirname(realpath(__FILE__)).'/logos/');
					while($file = readdir($handle)){
						if($file !== '.' && $file !== '..'){
							echo '<img class="item" src="'.get_template_directory_uri().'/logos/'.$file.'" alt="" />';
						}
					}*/
				?>
			</div>
		</section>


		<!-- FOOTER -->
		<footer id="footer" class="container-fluid">
			<div class="row align-items-center">
				<div class="col-md-12" style="border-right: 1px dotted rgba(255,255,255,0.25)">

					<div class="row align-items-center">
						<div class="col-sm-12" >
							<h5 class="nm-footer__heading">Korraldajad:</h5>
						</div>
						<div class="col-sm-4">
							<a href="http://www.innove.ee" target="_blank" class="nm-footer__partner">
								<img class="nm-footer__logo__big" src="<?php echo get_template_directory_uri();?>/images/logo/innove_kutseharidus_logo.svg" alt="Innove logo">
							</a>
						</div>
						<div class="col-sm-4">
							<a href="https://htm.ee/et" target="_blank" class="nm-footer__partner">
								<img class="nm-footer__logo__big" src="<?php echo get_template_directory_uri();?>/images/logo/hm_logo.svg" alt="Haridus- ja teadusministeeriumi logo">
							</a>
						</div>
						<div class="col-sm-4">
							<a href="http://ec.europa.eu/esf/home.jsp?langId=et" target="_blank" class="nm-footer__partner">
								<img class="nm-footer__logo__big" src="<?php echo get_template_directory_uri();?>/images/logo/esf_logo.svg" alt="Euroopa Sotsiaalfondi logo">
							</a>
						</div>
					</div>

				</div>
				<!--<div class="col-md-4">
					<div class="row">
						<div class="col-sm-12">
							<h5 class="nm-footer__heading">Suursponsor:</h5>
						</div>
						<div class="col-sm-12">
							<a href="http://www.innove.ee" target="_blank" class="nm-footer__partner">
								<img class="nm-footer__logo__big" src="<?php echo get_template_directory_uri();?>/images/logo/innove_logo.svg" alt="Innove logo">
							</a>
						</div>
					</div>
				</div>-->
			</div>

			<!-- Contact in footer -->
			<div class="row nm-footer__contact">
				<div class="col-md">
						SA Innove, Lõõtsa 4, 11415 Tallinn
				</div>
				<div class="col-md">
					<a href="mailto:noor.meister@innove.ee" target="_blank">noor.meister@innove.ee</a>
				</div>
				<div class="col-md">
					Telefon: <a href="tel:+3727350716" target="_blank">735&nbsp;0716</a>
				</div>
			</div>
		</footer>

		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-47997459-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>

		<?php wp_footer(); ?>

</body>
</html>
