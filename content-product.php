<?php
/**
 * The default template for displaying content for product on page
 *
 */
?>

<?php if ( is_search() ) : // Different format for Search ?>
  <div id="post-<?php the_ID(); ?>" class="search-result">
    <div class="search-result__image">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'thumbnail' ); ?>
      </a>
    </div>
    <div class="search-result__info">
      <h2 class="bwx-title"><span><a class="inherit" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></h2>
      <p class="bwx-part-numbers"><?php the_field('part_number'); ?></p>
      <p><?php the_excerpt(); ?></p>
    </div>
  </div>
<?php else: // !is_search ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header clear">
			<h2 class="bwx-title"><span><?php the_title(); ?></span></h2>
      <div style="float: right"><span class="bwx-button"><a href="/contact/inquire?pn=<?php the_field('part_number') ?>">Request Price</a></span></div>
      <p class="bwx-part-numbers">
        <span class="bwx-pn">Balanceworx P/N: <?php the_field('part_number'); ?></span>
        <?php if (get_field('oem_numbers') !== '') { ?>
          <span class="oem-pn">OEM P/N: <?php the_field('oem_numbers'); ?></span>
        <?php } ?>
      </p>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ),
					'after'  => '</div>',
				)
			);
      ?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
<?php endif; // is_search ?>
