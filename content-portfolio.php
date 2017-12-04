<?php

  $num_posts = ( is_front_page() ) ? 8 : -1;

  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => $num_posts,
    'orderby' => 'date'
  );
  $query = new WP_Query( $args );
?>

<section class="portfolio-row pad">
<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
    <div class="small-6 large-3 columns grid-item">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p> <?php the_tags( ' ', ', ', '<br />' ); ?> </p>
    </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>

</section>