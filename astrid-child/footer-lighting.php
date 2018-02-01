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
   	  	<div class="jumbotron jumbotron-fluid jumbotron-lighting">
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
      
      console.log("loaded!");

      $('.lighting-menu-container > ul.nav li a').click(function(e) {
          var clickedLink = $(this);
          clickedLink.parent().siblings().removeClass('active').end().addClass('active');
          clickedLink.parent().data("section");
          console.log(clickedLink.parent().data("section"));
          $("h1#lighting-entry-title").text(clickedLink.parent().data("section"));
      });


      
      $(window).on("scroll", function(e) {
        console.log($(this).scrollTop());
        if ($(this).scrollTop() > 147) {
          $("div#page").addClass("fix-subsection-bar");
        } else {
          $("div#page").removeClass("fix-subsection-bar");
        }
  
      });

    });
    

    // jQuery(document).ready(function($){
    //   $( window ).on("scroll", function(e) {
    //     console.log("window:" + $(this));
    //     console.log(this.scrollTop);
    //   });

    // });
  </script>
