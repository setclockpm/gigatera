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
        <div class="jumbotron jumbotron-fluid jumbotron-lighting" 
             style="background-image:url(<?php echo(get_post_meta($post->ID, 'footer-photo-url', true)) ?>)">
      <?php else: ?>
        <div class="jumbotron jumbotron-fluid jumbotron-lighting">
   	  <?php endif; ?>
   	  	  <div class="container">
   	  	    <h1 class="display-4"></h1>
   	  	    <p class="lead"></p>
   	  	  </div>
   	  	</div>
   	  	
   	  	<?php $toggle_contact = get_theme_mod('toggle_contact_footer', 1); ?>
   	  	<?php if ( $toggle_contact ) : ?>
   	  	<div class="footer-info">
   	  		<div class="container">
   	  			<?php astrid_footer_branding(); ?>
   	  			<?php astrid_footer_contact(); ?>
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
   	  </div>
   
    </div><!-- #page -->

    <?php wp_footer(); ?>

  </body>
</html>



<script type="text/javascript">
    jQuery(document).ready(function($){
      
      $(window).on("scroll", function(e) {
        $("li.lighting-nav-option").addClass('active current-menu-item current-page-item');
      });

      $('.lighting-menu-container > ul.nav li a').click(function(e) {
          var clickedLink = $(this);
          clickedLink.parent().siblings().removeClass('active').end().addClass('active');
          clickedLink.parent().data("section");
          console.log(clickedLink.parent().data("section"));
          $("h1#lighting-entry-title").text(clickedLink.parent().data("section"));
      });


      
      $(window).on("scroll", function(e) {
        if ($(this).scrollTop() > 240.0) {
          console.log("fix-subsection-bar");
          $("div#page").addClass("fix-subsection-bar");
        } else {
          $("div#page").removeClass("fix-subsection-bar");
        }
  
      });

    });
    
  </script>
