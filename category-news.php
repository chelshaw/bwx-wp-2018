<?php
/**
 * The template for displaying news category archive
 *
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">
			<header class="product-archive-header">
			  <h1 class="bwx-title"><span><?= single_cat_title(); ?> Archive</span></h1>
			  <p><strong>
					<?= category_description() ?>
			  <br />
			  </strong></p>
			</header>

  		<?php if ( have_posts() ) : ?>
				<div class="news-archive">
					<table class="news-archive__table">
						<tbody>
							<?php while ( have_posts() ) : the_post(); ?>
								<tr>
									<td class="headline"><?php the_title(); ?></td>
									<td><?php the_date( 'M Y' ); ?></td>
								</tr>
							<?php endwhile; ?>
						</tbody>
					</table>
				</div>
        <?php twentytwelve_content_nav( 'nav-below' ); ?>

  		<?php else : ?>
  			<?php get_template_part( 'content', 'none' ); ?>
  		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
