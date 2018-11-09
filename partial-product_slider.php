<?php $products = new WP_Query( array( 'post_type' => 'product', 'posts_per_page' => 15, 'tag' => 'showcase' ) ); ?>
<?php if ( $products->have_posts() ): ?>
<div id="product-slider" class="slider-wrapper">
  <div class="slider-inner">
    <?php while ( $products->have_posts() ) : $products->the_post(); ?>
      <div class="slide-outer">
        <div class="slide-front">
          <?php the_post_thumbnail( 'thumbnail' ); ?>
        </div>
        <div class="slide-back">
          <h3 class="slide-back__title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
          <p><em><?php the_field('part_number'); ?></em></p>
          <p><?= get_the_excerpt(); ?></p>
        </div>
      </div>
    <?php endwhile; wp_reset_query(); ?>
  </div>
</div>
<?php endif; ?>
