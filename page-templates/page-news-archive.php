<?php
/**
 * Template Name: News Archive Template
 *
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">
			<header class="product-archive-header">
			  <h1 class="bwx-title"><span>News Archive</span></h1>
			</header>

  		<?php
			$custom_cat_args = array(
			    'posts_per_page' => 150,
			    'order' => 'DESC',
			    'orderby' => 'post_date',
			    'category_name' => 'news'
			);
			$custom_cat_query = new WP_Query( $custom_cat_args );
			if ( $custom_cat_query->have_posts() ):
			?>
				<div class="news-archive">
					<table class="news-archive__table">
						<tbody>
							<?php while ( $custom_cat_query->have_posts() ): $custom_cat_query->the_post(); ?>
								<tr>
									<td class="headline"><?php the_title(); ?></td>
									<td><?php the_date( 'M Y' ); ?></td>
								</tr>
							<?php endwhile; ?>
						</tbody>
					</table>
				</div>
			<?php endif; wp_reset_postdata(); ?>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
