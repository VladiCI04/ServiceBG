<?php
    $testimonial_args = array (
        'post_type'         => 'testimonials',
        'post_status'       => 'publish',
        'posts_per_page'    => 10
    );

    $testimonial_query = get_posts( $testimonial_args );
?>


<!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonial</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                <?php foreach($testimonial_query as $testimonial) : ?>
                    <?php
                        $id = $testimonial->ID;
                        
                        $testimonial_author = get_field( 'author', $id );
                        $testimonial_stars = get_field( 'stars', $id );
                        $testimonial_profession = get_field( 'profession', $id );
                        $testimonial_photo = get_field( 'photo', $id )['url'];
                    ?>
                    <div class="testimonial-item text-center">
                        <div class="testimonial-text bg-light text-center p-4 mb-4">
                            <p class="mb-0" style="color: aliceblue"><?php echo $testimonial->post_content ?></p>
                        </div>
                        <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="<?php echo $testimonial_photo ?>" style="width: 80px; height: 80px;">
                        <div class="mb-2">
                            <?php 
                                for($i = 1; $i <= $testimonial_stars; $i++) {
                                    ?>
                                        <small class="fa fa-star text-secondary"></small>
                                    <?php
                                } 
                            ?>
                        </div>
                    <?php if(!empty($testimonial_author)) : ?>
                        <h5 class="mb-1"><?php echo esc_attr($testimonial_author) ?></h5>
                    <?php endif; ?>
                    <p class="m-0"><?php echo $testimonial_profession ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<!-- Testimonial End -->