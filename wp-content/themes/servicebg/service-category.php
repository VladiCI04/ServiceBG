<?php get_header(); ?>


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <h1 class="mb-4"><?php echo get_the_archive_title() ?></h1>
        <h3 class="mb-4"><?php echo get_the_archive_description() ?></h3>
        <div class="container">
            <div class="row g-4">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>    
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
                <?php else : ?>
                    <h1>No posts to be shown.</h1>
                <?php endif; ?>
            </div>
        </div>
        <?php
            the_posts_pagination(array(
                'mid_size'      => 2,
                'prev_text'     => __( 'Previous', 'servicebg' ),
                'next_text'     => __( 'Next', 'servicebg' )
            ));
        ?>
    </div>
    <!-- Service End -->


<?php get_footer(); ?>