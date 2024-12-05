<?php get_header(); ?>


    <?php
        $id = get_the_ID();
        
        $testimonial_author = get_field( 'author', $id );
        $testimonial_stars = get_field( 'stars', $id );
        $testimonial_profession = get_field( 'profession', $id );
    ?>


 <!-- Testimonial Start -->
 <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h1 class="text-secondary text-uppercase"><?php echo get_the_title() ?></h1>
            </div>
            <div class="position-relative wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0"><?php echo the_content() ?></p>
                    </div>
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'bg-light rounded-circle p-2 mx-auto mb-2', 'style' => 'width: 80px; height: 80px;', 'title' => 'Feature image']); ?>
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
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


<?php get_footer(); ?>