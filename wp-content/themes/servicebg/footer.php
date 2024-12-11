    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <?php get_sidebar( 'footer-1' ) ?>

                <?php get_sidebar( 'footer-2' ); ?>

                <?php get_sidebar( 'footer-3' ); ?>

                <?php get_sidebar( 'footer-4' ); ?>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="<?php echo get_home_url( '/' ); ?>">ServiceBG</a>, All Right Reserved. <?php echo date('Y') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/lib/wow/wow.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/lib/easing/easing.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/main.js"></script>

    <?php wp_footer(); ?>
</body>

</html>