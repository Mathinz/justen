<?php
/*
* Template Name: Projects
*/
get_header();
$bannerimage = get_field('projects_banner_image');
$bannersrc   = wp_get_attachment_image_src( $bannerimage, 'full' );
?>

<div class="atf-section" style="background: url(<?php echo $bannersrc['0']; ?>) center bottom no-repeat;"></div>
<!-- atf-section -->

<div class="services-top-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Projects</h1>
            </div>
            <div class="col-md-8">
                <div class="service-content">
                    <h3>
                       <?php
					    the_field('projects_main_heading');
					   ?>
                    </h3>
                    <?php
					    the_field('projects_content');
					   ?>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="articles-wrap">
    <div class="container">
        <div class="article-title">
            <h2>Recent Projects</h2>
        </div>
        <div class="row">
             <?php
		 $args = array(
        'post_type' => 'projects',
		'posts_per_page' => '-1',
        'post_status' => 'publish',
        
        );
        $prject_query = new WP_Query($args);
		if($prject_query->have_posts()):
		   while($prject_query->have_posts()):
               $prject_query->the_post();	
        $pojectstatus = get_field('select_project_status');		
        if($pojectstatus == 'inprogress'){
			$progress = 'In-Progress';
		}	
          else {
			  $progress = '';
		  }		
		 ?>
		 
			<div class="col-lg-3 col-md-6">
                <div class="article-section">
                    <div class="article-photo">
					  <a href="<?php the_permalink(); ?>">
					  <?php
                       if(!empty($progress)){
					  ?>
                        <div class="project-status"><?php echo $progress; ?></div>
					   <?php } ?>	
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">
                      </a>                   
				   </div> 
                    <h3><?php the_title(); ?>chool</h3>
                    <p>
					<?php
					$terms = get_the_terms( $post->ID , 'project_type' );
					foreach ( $terms as $term ) {
					echo $term->name;
					}
					?>
					</p>
                </div>
            </div>
          <?php endwhile; endif; ?>	
		<?php wp_reset_query(); ?>
        </div>
    </div>
</div><!-- articles-wrap -->


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