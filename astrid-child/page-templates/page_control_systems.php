<?php

/*

Template Name: Control Systems Main

*/
	get_header();
?>

	<div id="primary" class="lighting">
	  <main id="main" class="site-main" role="main">

      
      <div class="control-systems-title-container">
        <div class="lighting-title page">
          <header class="entry-header">
            <h1 id="lighting-entry-title" class="entry-title">Control Systems</h1>
          </header>
        </div>
      </div>
      
      
      <div id="lighting-container" class="lighting-content row">
        <div class="lighting-menu-container col-md-4">
          <ul class="nav nav-pills nav-stacked">
            <li role="presentation" class="active" data-section="GeSS">
              <a href="/products/control-systems/">GeSS</a>
            </li>
          </ul>
          <?php get_sidebar(); ?>

        </div>
        
  	  	<?php while ( have_posts() ) : the_post(); ?>
          
  	  		<?php get_template_part( 'template-parts/content', 'control-systems' ); ?>
	  		
  	  	<?php endwhile; // end of the loop. ?>
      </div>
          

	  </main><!-- #main -->
	</div><!-- #primary -->
  
  <script type="text/javascript">
    jQuery(document).ready(function($){
      
      console.log("loaded!");

      $('.lighting-menu-container > ul.nav li a').click(function(e) {
          var clickedLink = $(this);
          clickedLink.parent().siblings().removeClass('active').end().addClass('active');
          clickedLink.parent().data("section");
          console.log(clickedLink.parent().data("section"));
          $("h1#lighting-entry-title").text(clickedLink.parent().data("section"));
          // e.preventDefault();
      });
    });
    
  </script>


<?php get_footer("control-systems"); ?>

