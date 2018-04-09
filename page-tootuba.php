<?php
/*
Template Name: Oskuste Festival Template
Template Post Type: page, tootuba
*/
?>


<?php get_header() ?>

	<div class="container nm-pageContent">
		<section class="row" role="main">
			<div class="col-sm-12">

      <?php while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php echo the_id()?>">
					<h1 class="nm-title"><?php the_title() ?></h1>
          <?php include_once( dirname(__FILE__) . '/inc/social.php'); ?>
  				<div class="entry-content">
						<?php the_content() ?>
					</div><!-- .entry-content -->
				</div>
				<?php endwhile; ?>

				<div class="nm-pictos">
        
        <?php
          $args = array( 'post_type' => 'tootuba', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
            echo '<a href="#" data-id="' . get_the_ID() . '" data-modal-type="tootuba" class="nm-modal-opener nm-picto nm-rest__listItem">';
            //echo '<div class="nm-picto nm-rest__listItem">';
            echo '<img src="' . get_the_post_thumbnail_url() . '">';
            echo '<h5 class="nm-picto__text">' . get_the_title() . '</h5>';
            echo '</a>';
            //echo '</div>';
          endwhile;
        ?>
  			</div>
			</div>

		</section>
	</div><!-- /.container -->
	<?php include_once( dirname(__FILE__) . '/inc/gallery-loader.php'); ?>
<?php get_footer() ?>

<?php include_once( dirname(__FILE__) . '/inc/modal.php'); ?>
