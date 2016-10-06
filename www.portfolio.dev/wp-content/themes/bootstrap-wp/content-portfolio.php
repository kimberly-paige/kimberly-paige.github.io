<?php

  $num_posts = ( is_front_page() ) ? 4 : -1;

  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );

?>


<section class="row container">

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
  </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>

</section>
