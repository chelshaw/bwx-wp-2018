<?php
/**
 * The template for displaying category archive
 *
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">
			<header class="product-archive-header">
			  <h1 class="bwx-title"><span><?= single_cat_title(); ?> Products</span></h1>
			  <p><strong>
					<?= category_description() ?>
			  <br />
			    <!-- **Stock quantities are approximate, but not guaranteed. -->
			  </strong></p>
			</header>

  		<?php if ( have_posts() ) : ?>
        <table class="products-table">
          <tbody>
            <tr><th></th><th>Product</th><th>Balanceworx P/N</th><th>Reference Numbers</th><th></th></tr>

      			<?php
      			/* Start the Loop */
						while ( have_posts() ) :
      				the_post();

      				get_template_part( 'content', 'product_row' );

            endwhile;
      			?>
          </tbody>
        </table>
        <?php twentytwelve_content_nav( 'nav-below' ); ?>

  		<?php else : ?>
  			<?php get_template_part( 'content', 'none' ); ?>
  		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
