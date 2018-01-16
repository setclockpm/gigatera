<?php

/*

Template Name: Facade Lighting (Single)

*/
	get_header();
?>

	<div id="primary" class="lighting">
	  <main id="main" class="site-main" role="main">

      
      <div id="facade-lighting-title-container" class="lighting-title-container">
        <div class="lighting-title page">
          <header class="entry-header">
            <h1 id="lighting-entry-title" class="entry-title" style="color:#fff;">Facade Lighting</h1>
          </header>
        </div>
      </div>
      
      
      <div id="lighting-container" class="lighting-content row">
        <div class="lighting-menu-container col-md-3">
          <ul class="nav nav-pills nav-stacked">
            <li role="presentation" data-section="Sports / Flood Lighting">
              <a href="/products/lighting/sports-flood">Sports / Flood Lighting</a>
            </li>
            <li role="presentation" data-section="Bay Lighting">
              <a href="/products/lighting/bay">Bay Lighting</a>
            </li>
            <li role="presentation" data-section="Roadway Lighting">
              <a href="/products/lighting/roadway">Roadway Lighting</a>
            </li>
            <li role="presentation" class="active" data-section="Facade Lighting">
              <a href="/products/lighting/facade">Facade Lighting</a>
            </li>
            <li>
              <img class="alignleft" src="https://gigaterausa.com/wp-content/uploads/2018/01/<?php echo get_post_meta($post->ID, 'series', true); ?>-1.png">
            </li>
          </ul>
        </div>
        
  	  	<?php while ( have_posts() ) : the_post(); ?>
  	  		<?php get_template_part( 'template-parts/content', 'single-facade' ); ?>
	  		
  	  	<?php endwhile; // end of the loop. ?>
      </div>
          
	  </main><!-- #main -->
	</div><!-- #primary -->
  


  <script type="text/javascript">
    jQuery(document).ready(function($){
      
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

<?php get_footer("lighting"); ?>

