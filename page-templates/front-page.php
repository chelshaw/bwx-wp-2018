<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

  <?php get_template_part( 'partial', 'product_slider' ); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php
      while ( have_posts() ) :
			 	the_post();

        get_template_part( 'content', 'page' );
      endwhile; // end of the loop. ?>

      <?php if( have_rows('section') ): ?>

        <div class="what-we-do">
          <h3 class="bwx-title"><span>What We Offer</span></h3>

          <div class="what-we-do-blocks">
            <?php while ( have_rows('section') ) : the_row(); ?>
              <div class="what-we-do-block">
                <div class="what-we-do-block__container">
                  <div class="what-we-do-block__image" style="background-image: url('<?= the_sub_field('bg_image') ?>')">
                    <div class="what-we-do-block__icon-position">
                      <div class="what-we-do-block__icon">
                        <i class="fa fa-<?= the_sub_field('icon') ?>" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="what-we-do-block__content">
                    <h4><?= the_sub_field('title') ?></h4>
                    <?= the_sub_field('content') ?>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>

      <?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

  <div id="secondary" class="site-content">
    <?php get_sidebar( 'front' ); ?>
  </div>

<?php get_footer(); ?>
