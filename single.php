<?php get_header(); ?>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">
      <!-- Primary Column -->
      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

             <article class="post">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <p class="date"><?php the_date('l, F j, Y'); ?></p>
                <?php if( get_the_post_thumbnail() ) : ?>
                  <div class="img-container">
                    <?php the_post_thumbnail('large'); ?>
                  </div>
                <?php endif; ?>

                <?php the_content(); ?>
                <?//php comments_template(); ?>
              </article>

          <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no pages found.', 'marinabcoding-com-portfolio-theme'); ?></p>
          <?php endif; ?>
        </div>
      </div>
  <!--</div> -->

   <?php get_sidebar() ?>


  </div>
</section>


<?php get_footer(); ?>