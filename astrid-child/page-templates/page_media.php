<?php

/*

Template Name: Media Main

*/
	get_header();
?>

	<div id="primary" class="applications">
	  <main id="main" class="site-main" role="main">

      
      <div class="applications-title-container">
        <div class="applications-title page">
          <header class="entry-header">
            <h1 id="media-entry-title" class="entry-title">Applied Projects</h1>
          </header>
        </div>
      </div>
      
      
      <div id="media-container" class="media-content row">
        <div class="lighting-menu-container col-md-3">
          <ul class="nav nav-pills nav-stacked">
            <li role="presentation" class="active" data-section="Sports / Flood Lighting Applications">
              <a href="/applications/lighting/sports-flood">Sports / Flood Lighting</a>
            </li>
            <li role="presentation" data-section="Bay Lighting Applications">
              <a href="/applications/lighting/bay">Bay Lighting</a>
            </li>
            <li role="presentation" data-section="Roadway Lighting Applications">
              <a href="/applications/lighting/roadway">Roadway Lighting</a>
            </li>
          </ul>
        </div>
        
  	  	<?php while ( have_posts() ) : the_post(); ?>
          
  	  		<?php get_template_part( 'template-parts/content', 'applications' ); ?>
	  		
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

<?php get_footer("applications"); ?>

