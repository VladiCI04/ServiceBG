<?php
     $slider_args = array (
          'post_type'         => 'slider',
          'post_status'       => 'publish',
          'posts_per_page'    => 10
     );

     $slider_query = get_posts( $slider_args );
?>


<?php if(!empty($slider_query)&&is_array($slider_query)) : ?>
     <!-- Carousel Start -->
     <div class="container-fluid p-0 mb-5">
          <div class="owl-carousel header-carousel position-relative">
               <?php foreach($slider_query as $slider) : ?>
                    <?php
                         $slider_ID = $slider->ID;

                         $photo = get_field('photo', $slider_ID)['url'];
                         $header1 = get_field('header1', $slider_ID);
                         $header2 = get_field('header2', $slider_ID);
                         $paragraph = get_field('paragraph', $slider_ID);
                         $button = get_field('button', $slider_ID);
                         $href = get_field('href', $slider_ID);
                    ?>
                    <div class="owl-carousel-item position-relative">
                         <img class="img-fluid" src="<?php echo $photo; ?>" alt="banner">
                         <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
                              <div class="container">
                                   <div class="row justify-content-start">
                                        <div class="col-10 col-lg-8">
                                             <h5 class="text-white text-uppercase mb-3 animated slideInDown"><?php echo $header1; ?></h5>
                                             <h1 class="display-3 text-red animated slideInDown mb-4" style="color:lawngreen"><?php echo $header2 ;?></h1>
                                             <p class="fs-5 fw-medium text-white mb-4 pb-2"><?php echo $paragraph; ?></p>
                                             <a href="<?php echo $href ?>" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight"><?php echo $button ?></a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               <?php endforeach; ?>
          </div>
     </div>
     <!-- Carousel End -->
<?php endif; ?>

<?php wp_reset_postdata(); ?>