<?php get_header(); ?>


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4"><?php echo get_the_title() ?></h1>
                    <h6 class="mb-4"><?php echo the_content() ?></h6>
                </div>
                <?php if(has_post_thumbnail()) : ?>
                    <div class="col-lg-6 pt-4" style="min-height: 500px;">
                         <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                              <?php the_post_thumbnail('post-thumbnail', ['class' => 'position-absolute img-fluid w-150 h-150', 'title' => 'Feature image']); ?>
                         </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <?php servicebg_display_latest_post(); ?>
    <!-- Service End -->


<?php get_footer(); ?>