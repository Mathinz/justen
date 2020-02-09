<?php
get_header();
?>

<div class="services-top-content aggregate-detail">
   <?php
     while(have_posts()):
      the_post();	 
   ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="back-wrap"><a href="#">Gravel</a></div>
                <div class="side-photo">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
                <p><a href="#" class="link-download">Download Pricelist</a></p>
            </div>
            <div class="col-md-8">
                <div class="service-content">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>

                    <h4>Common Uses</h4>
                    <?php the_field('common_uses_content'); ?>

                    <h4>Pricing & Availability</h4>
                    <?php the_field('pricing_availability_content'); ?>
                    
                    <h4>Delivery</h4>
                    <?php the_field('delivery_content'); ?>

                </div>
            </div>
        </div>
    </div>
	<?php  endwhile; ?>
	<?php wp_reset_query(); ?>
</div>

<?php get_template_part('template-parts/cta','form'); ?>


<?php
get_footer();
?>