<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grondin
 */

get_header();
$obj = get_queried_object();
$term_id       =  $obj->term_id;
$bannerimage   =  get_field('aggregate_banner_image','142');
$bannersrc     =  wp_get_attachment_image_src( $bannerimage, 'full' );
$category_desc = get_field('aggregate_type_description','aggregate_type_'. $term_id);
?>

	<div class="atf-section" style="background: url(<?php echo $bannersrc['0']; ?>) center bottom no-repeat;"></div>
<!-- atf-section -->

<div class="services-top-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="back-wrap"><a href="#">Services</a></div>
                <div class="sidebar">
					<?php 
					$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=105&echo=0' );
					if ( $childpages ) {
					 
						$string = '<ul>' . $childpages . '</ul>';
					}
					echo $string;
					?>
                </div>
                <p><a href="/aggregate/" class="link-download">Download Pricelist</a></p>
            </div>
            <div class="col-md-8">
                <div class="service-content">
                    <h2><?php the_archive_title(); ?></h2>
					<?php the_archive_description( '<h3>', '</h3>' );  ?>
                    <?php echo $category_desc; ?>


                    <div class="articles-wrap">
                        <div class="">
                            <div class="row">
							 <?php
                              if(have_posts()):
							   while(have_posts()):
							      the_post();
							 ?>
							
                                <div class="col-lg-4 col-md-6">
								 <a href="<?php the_permalink(); ?>">
                                    <div class="article-section">
                                        <div class="article-photo">
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                        </div> 
                                        <h3><?php the_title(); ?></h3>
                                    </div>
									</a>	
                                </div>
							
							<?php endwhile; endif; ?>	
                            </div>
                        </div>
                    </div><!-- articles-wrap -->


                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/cta','form'); ?>

<?php
get_footer();
