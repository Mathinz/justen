<?php
get_header();
$bannerimage = get_field('project_main_banner_image');
$bannersrc   = wp_get_attachment_image_src( $bannerimage, 'full' );
?>

<div class="atf-section" style="background: url(<?php echo $bannersrc[0]; ?>) center bottom no-repeat;"></div>
<!-- atf-section -->

<div class="article-detail-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="back-wrap"><a href="#">Services</a></div>
                <div class="sidebar">
                    <h6>Location</h6>
                    <p><?php the_field('project_location'); ?></p> 
                    <h6>Date</h6>
                    <p><?php the_field('project_date'); ?></p>
                    <h6>Services Used</h6>
					<?php
					 $servicelink  	    = 	get_field('project_services_used'); 
					 $serviceid   	    = 	url_to_postid( $servicelink );
					 $servicetitle	    = 	get_the_title( $serviceid );
					?>
                    <p><a href="<?php echo $servicelink; ?>" class="text-underline"><?php echo $servicetitle; ?></a></p>
                    <h6>Awards</h6>
                    <p><?php the_field('awards'); ?></p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="article-detail">
                    <h2><?php the_field('project_title'); ?></h2>
                    <?php the_field('project_description'); ?>
                    <!--<div class="gallery-section">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="gallery-item"><a href="#"><img src="assets/images/photo.png" alt=""></a></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="gallery-item"><a href="#"><img src="assets/images/photo.png" alt=""></a></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="gallery-item"><a href="#"><img src="assets/images/photo.png" alt=""></a></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="gallery-item"><a href="#"><img src="assets/images/photo.png" alt=""></a></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="gallery-item"><a href="#"><img src="assets/images/photo.png" alt=""></a></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="gallery-item"><a href="#"><img src="assets/images/photo.png" alt=""></a></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="gallery-item"><a href="#"><img src="assets/images/photo.png" alt=""></a></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="gallery-item"><a href="#"><img src="assets/images/photo.png" alt=""></a></div>
                            </div>
                        </div>
                    </div>-->
					
                </div>
            </div>
        </div>
    </div>
</div><!-- article-detail-wrap -->



<div class="article-bot-wrap">
    <div class="container">
        <div class="article-bot">
            <div class="art-left">
                <div class="left-inner">
                    <h2>You name it, we work on it!</h2>
                    <p><strong><a href="#">View Projects</a></strong></p>
                </div>
            </div>
            <div class="art-right">
                <h2>Ready to break ground? Let’s get started!</h2>
                <a href="#" class="arrow-down form-link"></a>
            </div>
        </div>
    </div>
</div><!-- article-bot-wrap -->

<div class="sectin-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="form-left-info">
                    <h2>Share your idea with us. We’ll dig it.</h2>
                    <p>Fill out this form and we’ll be in touch shortly.</p>
                </div>
            </div>
            <div class="col-md-5 offset-md-1">
                <!--<div class="form-section">
                    <p>
                        <label>Name</label>
                        <input type="text" value="" class="form-control">
                    </p>
                    <p>
                        <label>Email Address</label>
                        <input type="text" value="" class="form-control">
                    </p>
                    <p>
                        <label>Subject</label>
                        <input type="text" value="" class="form-control">
                    </p>
                    <p>
                        <label>Category</label>
                        <select class="form-control">
                            <option>Select one…</option>
                        </select>
                    </p>
                    <p>
                        <label>Message</label>
                        <textarea rows="5" cols="5" class="form-control"></textarea>
                    </p>
                    <input type="submit" value="Submit" class="btn btn-danger rounded-0">
                </div>-->
				<div class="form-section">
				   <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]'); ?>
				 </div>
            </div>
        </div>
    </div>
</div><!-- form-section -->

<?php
get_footer();
?>