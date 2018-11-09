<tr class="product-row">
  <td class="image"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a></td>
  <td class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></td>
  <td class="pn"><?php the_field('part_number'); ?></td>
  <td class="oem"><?php the_field('oem_numbers'); ?></td>
  <td class="numbers"><a class="primary-button" href="/inquire?pn=<?php the_field('part_number') ?>">Email for pricing</a></td>
</tr>
