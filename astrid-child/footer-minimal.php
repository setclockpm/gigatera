<?php
/**
 * The template for displaying the lighting footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astrid
 */

?>
   
   		  </div>
      </div><!-- #content -->
   
      <div class="footer-wrapper">
      <?php if (get_post_meta($post->ID, 'footer-photo-url', true)): ?>
        <div class="jumbotron jumbotron-fluid" style="background-image:url(<?php echo(get_post_meta($post->ID, 'footer-photo-url', true)) ?>)">
          <div class="container">
            <h1 class="display-4"></h1>
            <p class="lead"></p>
          </div>
        </div>
      <?php endif; ?>
          
        <footer id="colophon" class="site-footer" role="contentinfo"> 
          <div class="site-info container">

            <nav id="footernav" class="footer-navigation" role="navigation">
              <?php wp_nav_menu( array( 'theme_location' => 'footer', 'depth' => '1', 'menu_id' => 'footer-menu' ) ); ?>
            </nav><!-- #site-navigation -->

            <div class="site-copyright">
              <?php do_action('astrid_footer'); ?>
            </div>

          </div><!-- .site-info -->
        </footer><!-- #colophon -->

      </div><!-- .footer-wrapper -->
   
    </div><!-- #page -->

    <?php wp_footer(); ?>

  </body>
</html>



<script type="text/javascript">
    jQuery(document).ready(function($){
     

    });
</script>
