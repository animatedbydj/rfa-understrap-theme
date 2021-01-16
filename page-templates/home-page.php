<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>


  <!-- hero -->
  <section class="hero font-weight-bold" style="background-image:url('<?php the_field('hero_background_image') ?>');">
      <div class="container pt-5">
        <div class="row">
          <div class="column">
			<h1 class="mx-auto mb-4 font-weight-bold"><?php the_field('hero_heading'); ?></h1>
            <h2 class="mx-auto mb-4 font-weight-bold">
			<?php the_field('hero_heading_2'); ?>
            </h2>
            <h3 class="font-weight-bold mx-auto mb-4">
			<?php the_field('hero_heading_3'); ?>
            </h3>

            <div class="cta-btn mx-auto text-center">
              <a
                class="btn btn-primary btn-lg font-weight-bold"
                href="#"
                role="button"
                ><?php the_field('hero_cta_text'); ?></a
              >
            </div>
          </div>
        </div>
      </div>
	</section>
	<main>
  
	
  <section class="about py-4">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-11 text-center mb-5">
                    <h2 class="font-weight-bold my-4"><?php the_field('about_heading'); ?></h2>
                    <h5><?php the_field('about_subheading'); ?></h5>
                </div>
            </div>
            <div class="row d-flex flex-wrap flex-column-reverse flex-lg-row align-items-center justify-content-around">
                <div class="about-text col-11 col-lg-6">
                    <h4 class="mb-3 font-weight-bold"><?php the_field('about_main_text_heading'); ?></h4>
                    <p><?php the_field('about_main_text_paragraph'); ?></p>
                   
                    <ul class="mb-3 ml-4">
                     <?php

               
                if( have_rows('about_list') ):

             
                while( have_rows('about_list') ) : the_row();

                 
                  $listItem = get_sub_field('list_item');
                  echo '<li>' . $listItem . '</li>';

                
                endwhile;

                  // No value.
                else :
                
                  endif; 
                   ?>
                    
                    </ul>
                    <p><?php the_field('about_main_text_paragraph_2'); ?>

                    </p>
                    <div class="text-center text-md-left">
                      <a
                    class="btn btn-primary btn-lg font-weight-bold mb-3  "
                    href="#"
                    role="button"
                    ><?php the_field('about_cta_text'); ?></a
                  >
                    </div>
                </div>

                <div class="about-video  col-11 col-lg-6 d-flex justify-content-center mb-5">
                <?php the_field('about_video'); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section-->
    <!-- secondary section -->
    <!-- section secondary -->
    <section class="d-flex flex-column justify-content-center align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <div class="secondary-card mb-2">
               <div class="row d-flex flex-column-reverse flex-md-row">
                   <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                    <div class="secondary-card-img d-flex align-items-center">
                        <img class="mx-auto img-fluid" src="<?php the_field('secondary_card_1_image'); ?>" alt="">
                    </div>
                   
                   </div>
                   <div class="col-12 col-md-6 mb-4 d-flex justify-content-center">
                    <div class="secondary-card-text pt-5">
                        <h3 class="font-weight-bold mb-3"><?php the_field('secondary_card_1_heading'); ?></h3>
                        <p><?php the_field('secondary_card_1_text'); ?></p>
                    </div>
                   </div>
               </div>
            </div>
            <div class="secondary-card mb-5">
                <div class="row">
               
                    <div class="col-12 col-md-6 mb-4 d-flex justify-content-center">
                     <div class="secondary-card-text pt-5">
                         <h3 class="font-weight-bold mb-3"><?php the_field('secondary_card_2_heading'); ?></h3>
                         <p><?php the_field('secondary_card_2_text'); ?></p>
                     </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                        <div class="secondary-card-img d-flex justify-content-center align-items-center">
                            <img src="<?php the_field('secondary_card_2_image'); ?>" alt="">
                        </div>
                       
                       </div>
                </div>
             </div>
        </div>
    </section>

    <!-- end secondary section -->

	</main>
  <!-- blog section -->
  <section class="blog d-flex align-items-center justify-content-center" style="background-image:url('<?php the_field('blog_section_background_image') ?>');">

 
        <div class="container py-5">
            <h2 class="font-weight-bold my-5">Increasing Public Awareness About Flushability<br/> Will Lead to Real, Lasting Changes.</h2>
            <div class="row d-flex justify-content-center">
            <?php
              $args = array( 
                'post_type'   => 'post'
              );
              $blogpostquery = new WP_QUERY( $args );
              while ( $blogpostquery->have_posts() ) :
                $blogpostquery->the_post();
                get_template_part( 'loop-templates/content', 'blog-card' );
                endwhile;

                wp_reset_postdata();
                  ?>
            </div>
          </div>
    </section>
<!-- proper disposal section -->
<section class="proper-disposal font-italic text-center d-flex justify-content-center align-items-center">
        <h2><?php the_field('proper_disposal_section_text'); ?></h2>
        </section>
        
<?php
get_footer();
?>