<?php get_header(); ?>

<section class="two-column row no-max pad">
  <div class="small-12 columns ">
    <div class="row">
        <div class="leader text-center">
          <h1><?php if( is_home() && get_option( 'page_for_posts' ) ) echo get_the_title( get_option( 'page_for_posts' ) ); ?></h1>
        </div>
      <!-- Primary Column -->
      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

             <article <?php post_class('post'); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="date"><?php the_date('l, F j, Y'); ?></p>
                <h3><a href="<?php the_permalink(); ?>"><?php echo strip_tags( get_the_excerpt() ); ?></a></h3>
                <div class="read-more alignright">
                  <h4><a href="<?php the_permalink(); ?>">Read More ⟶</a></h4>
                </div>
                <?php if( get_the_post_thumbnail() ): ?>
                <div class="img-container">
                  <?php the_post_thumbnail('large'); ?>
                </div>
              <?php endif; ?>
              </article>

          <div class="nav-previous alignleft"><p><?php next_posts_link( 'Older posts' ); ?></p></div>
          <div class="nav-next alignright"><p><?php previous_posts_link( 'Newer posts' ); ?></p></div>


          <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no pages found.', 'marinabcoding-com-portfolio-theme'); ?></p>
          <?php endif; ?>
        </div>
      </div>
<!--   </div> -->

    <?php get_sidebar() ?>


  </div>
</section>


<?php get_footer(); ?>