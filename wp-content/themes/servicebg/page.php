<?php get_header(); ?>


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-10 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4"><?php echo get_the_title() ?></h1>
                    <p class="mb-4"><?php echo the_content() ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    
<?php get_footer(); ?>