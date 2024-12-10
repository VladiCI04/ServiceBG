<?php
    $team_args = array (
        'post_type'         => 'team',
        'post_status'       => 'publish',
        'posts_per_page'    => 10
    );

    $team_query = get_posts( $team_args );
?>


<?php if(!empty($team_query)&&is_array($team_query)) : ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Technicians</h6>
                <h1 class="mb-5">Our Expert Technicians</h1>
            </div>
            <div class="row g-4">
                <?php foreach($team_query as $team) : ?> 
                    <?php
                        $team_ID = $team->ID;

                        $photo = get_field('photo', $team_ID)['url'];
                        $name = get_field('name', $team_ID);
                        $work = get_field('work', $team_ID);
                    ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="<?php echo $photo ?>" alt="helper">
                            </div>
                            <div class="team-text">
                                <div class="bg-light">
                                    <h5 class="fw-bold mb-0"><?php echo $name ?></h5>
                                    <small><?php echo $work ?></small>
                                </div>
                                <div class="bg-primary">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>