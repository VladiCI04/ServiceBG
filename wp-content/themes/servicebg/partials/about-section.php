<?php
    $id = get_the_ID();

    $homepage_header = get_field( 'page_header', $id );
    $homepage_content = get_field( 'content', $id );
    $homepage_check1 = get_field( 'check1', $id );
    $homepage_check2 = get_field( 'check2', $id );
    $homepage_check3 = get_field( 'check3', $id );
    $homepage_phone = get_field( 'phone', $id );
    $homepage_photo1 = get_field( 'photo1', $id )['url'];
    $homepage_photo2 = get_field( 'photo2', $id )['url'];
?>


<!-- About Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase"><?php echo $homepage_header ?></h6>
                    <p class="mb-4"><?php echo $homepage_content ?></p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i><?php echo $homepage_check1 ?></p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i><?php echo $homepage_check2 ?></p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i><?php echo $homepage_check3 ?></p>
                    <div class="bg-primary d-flex align-items-center p-4 mt-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <p class="fs-5 fw-medium mb-2 text-white">Contact Us</p>
                            <h3 class="m-0" style="color:black"><?php echo $homepage_phone ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100" src="<?php echo $homepage_photo1 ?>" alt="photo1">
                        <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50" src="<?php echo $homepage_photo2 ?>" style="object-fit: cover;" alt="photo2">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- About End -->