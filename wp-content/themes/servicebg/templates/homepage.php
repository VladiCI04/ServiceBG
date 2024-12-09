<?php
/**
* Template Name: Homepage
*/
?>


<?php
    $id = get_the_ID();

    $homepage_photo1 = get_field( 'photo_1', $id );
    $homepage_photo2 = get_field( 'photo_2', $id );
?>


<?php get_header(); ?>


    <!-- Latest Posts Start -->
    <?php 
        servicebg_display_latest_post(3); 
    ?>
    <!-- Latest Posts End -->


    <!-- About Start -->
    <?php 
        get_template_part('partials/about', 'section');
    ?>
    <!-- About End -->


    <!-- Fact Start -->
    <?php 
        get_template_part('partials/fact', 'section');
    ?>
    <!-- Fact End -->


    <!-- Service Start -->
    <?php 
        get_template_part('partials/service', 'section');
    ?>
    <!-- Service End -->


    <!-- Booking Start -->
    <?php 
        get_template_part('partials/booking', 'section');
    ?>
    <!-- Booking End -->


    <!-- Team Start -->
    <?php 
        get_template_part('partials/team', 'section');
    ?>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <?php 
        get_template_part('partials/testimonial', 'section');
    ?>
    <!-- Testimonial End -->


<?php get_footer(); ?>