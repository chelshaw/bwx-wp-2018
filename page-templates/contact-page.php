<?php
/**
 * Template Name: Contact Page Template
 *
 *
 */

get_header(); ?>

  <div class="bwx-contact-page padded-wrapper">
    <div id="secondary" class="bwx-contact-page-sidebar">
      <?php if(is_active_sidebar('bwx-contact')) dynamic_sidebar('bwx-contact'); ?>
    </div>

    <div id="primary" class="site-content bwx-contact-page-content">
  		<div id="content" role="main">

  			<?php
  			while ( have_posts() ) :
  				the_post();
  ?>
  				<?php if ( has_post_thumbnail() ) : ?>
  					<div class="entry-page-image">
  						<?php the_post_thumbnail(); ?>
  					</div><!-- .entry-page-image -->
  				<?php endif; ?>

  				<?php get_template_part( 'content', 'page' ); ?>

  			<?php endwhile; // end of the loop. ?>

  		</div><!-- #content -->
  	</div><!-- #primary -->
  </div>

<?php get_footer(); ?>
