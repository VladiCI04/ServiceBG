<?php
     $service_args = array (
          'post_type'         => 'service',
          'post_status'       => 'publish',
          'posts_per_page'    => 10
     );

     $service_query = get_posts( $service_args );
?>

<!-- Service Start -->
<div class="container-fluid py-5 px-4 px-lg-0">
     <div class="row g-0">
          <div class="col-lg-3 d-none d-lg-flex">
               <div class="d-flex align-items-center justify-content-center bg-primary w-100 h-100">
                    <h1 class="display-3 text-white m-0" style="transform: rotate(-90deg);">SERVICES</h1>
               </div>
          </div>
          <div class="col-md-12 col-lg-9">
               <div class="ms-lg-5 ps-lg-5">
                    <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                         <h6 class="text-secondary text-uppercase">Our Services</h6>
                         <h1 class="mb-5">Explore Our Services</h1>
                    </div>
                    <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                         <?php foreach($service_query as $service) : ?> 
                              <div class="bg-light p-4">
                                   <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                        <i class="fa fa-water fa-2x text-primary"></i> 
                                   </div>
                                   <h4 class="mb-3"><?php echo $service->post_title; ?></h4>
                                   <p><?php echo $service->post_content; ?></p>
                                   <a href="" class="btn bg-white text-primary w-100 mt-2">Read More<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                              </div>
                         <?php endforeach ?>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- Service End -->