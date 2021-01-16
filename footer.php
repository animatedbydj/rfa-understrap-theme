<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="footer d-flex align-items-center justify-content-center pt-5">

            <div class="container d-flex flex-column pt-5">
                <div class="row">
                    <div class="col-12 col-md-6 mb-5 d-flex justify-content-center align-items-center">
                        <a class="footer-logo" href="#"
            ><img alt="" src="<?php the_field('site_footer_logo'); ?>"
          /></a>

            </div>
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-end">
                <!-- footer social nav -->
            <nav class="footer-nav d-flex justify-content-center">
              <ul class="d-flex justify-content-around">
                  <li><a href="<?php the_field('twitter_link'); ?>" target="_blank" rel="noopener"><i class="fab fa-twitter fa-2x"></i></a></li>
                  <li><a href="<?php the_field('facebook_link'); ?>" target="_blank" rel="noopener"><i class="fab fa-facebook fa-2x"></i></a></li>
                  <li><a href="<?php the_field('instagram_link'); ?>" target="_blank" rel="noopener"> <i class="fab fa-instagram fa-2x"></i></a></li>
              </ul>
          </nav>
           </div>
        </div>
        <div class="footer-bottom row d-flex justify-content-center font-weight-bold text-center">
           
                <p>&copy; 2021 RFA | <a href="#">PRIVACY POLICY</a> | <a href="#">CONTACT US</a></p>
          
        </div>
    </div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
