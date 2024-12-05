<?php get_header(); ?>


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4"><?php echo get_the_title() ?></h1>
                    <div class="col-md-2">
                        <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft like" id="service-<?php echo get_the_ID(); ?>" data-id="<?php echo get_the_ID(); ?>">LIKE (<?php echo $service_item_like = get_post_meta( get_the_ID(), 'votes', true ) ?? 0;?>)</a>
                    </div>
                    <br>
                    <h6 class="mb-4"><?php echo the_content() ?></h6>
                    <p class="mb-4">
                        <?php 
                            $service_address  = get_post_meta(get_the_ID(), 'service_address', true);
                            if(!empty($service_address)) {
                                echo '<div>';
                                    echo 'Address: ' . esc_attr($service_address);
                                echo '</div';
                            }
                        ?>
                    </p>
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


<?php get_footer(); ?>