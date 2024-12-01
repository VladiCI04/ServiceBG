<?php
/**
 * Template Name: About
*/
?>


<?php get_header(); ?>


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


<?php get_footer(); ?>