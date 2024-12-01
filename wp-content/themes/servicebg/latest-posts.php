<?php
     $latest_posts_args = array(
          'post_type'         => 'post',
          'post_status'       => 'publish',
          'posts_per_page'    => $number_of_posts
     );

     $latest_posts_query = new WP_Query($latest_posts_args);
?>


<!-- Service Start -->
 <?php if($latest_posts_query -> have_posts()) : ?>
 <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
               <h2 class="wow fadeInUp">LATEST NEWS</h2>
               <?php while($latest_posts_query -> have_posts()) : $latest_posts_query -> the_post() ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                         <div class="overflow-hidden">
                              <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid w-100 h-100', 'title' => 'Feature image']); ?>
                         </div>
                         <div class="d-flex align-items-center justify-content-between bg-light p-4">
                              <h5 class="text-truncate me-3 mb-0"><?php echo get_the_title() ?></h5>
                              <h6><?php echo get_the_date() ?></h6>
                              <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href="<?php get_the_permalink() ?>"><i class="fa fa-arrow-right"></i></a>
                         </div>
                         <div class="d-flex align-items-center justify-content-between bg-light p-2">
                              <p><?php the_excerpt(); ?></p>
                         </div>
                    </div>
               <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- Service End -->


<?php wp_reset_postdata(); ?>