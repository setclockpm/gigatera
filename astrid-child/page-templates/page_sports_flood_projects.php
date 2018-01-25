<?php

/*

Template Name: Sports Flood Lighting Projects

*/
	get_header();
?>

	<div id="primary" class="lighting">
	  <main id="main" class="site-main" role="main">

      
      <div class="applications-title-container background-sports-flood">
        <div class="applications-title page">
          <header class="entry-header">
            <h1 id="applications-entry-title" class="entry-title">Sports / Flood Lighting Projects</h1>
          </header>
        </div>
      </div>
      
      
      <div id="applications-container" class="applications-content">

        <nav id="applied-projects" class="navbar navbar-fixed-top section-nav">
          <ul class="nav nav-pills">
            <li role="presentation" data-section="Applied Projects">
              <a href="/applications" class="active"> Applications Home</a>
            </li>
            <li role="presentation" data-section="Bay Lighting Projects">
              <a href="/applications/bay-lighting">Bay Lighting</a>
            </li>
            <li role="presentation" data-section="Roadway Lighting Projects">
              <a href="/applications/roadway-lighting">Roadway Lighting</a>
            </li>
            <li role="presentation" data-section="Facade Lighting Projects">
              <a href="/applications/facade-lighting">Facade Lighting</a>
            </li>
          </ul>
        </nav>
        
  	  	<?php while ( have_posts() ) : the_post(); ?>
          
  	  		<?php get_template_part( 'template-parts/content', 'sports-flood-projects' ); ?>
	  		
  	  	<?php endwhile; // end of the loop. ?>
      </div>
          
	  </main><!-- #main -->
	</div><!-- #primary -->
  
  <script type="text/javascript">
    jQuery(document).ready(function($){
      
      console.log("loaded!");

      $('.section-nav > ul.nav li a').click(function(e) {
          var clickedLink = $(this);
          clickedLink.parent().siblings().removeClass('active').end().addClass('active');
          clickedLink.parent().data("section");
          console.log(clickedLink.parent().data("section"));
          $("h1#applications-entry-title").text(clickedLink.parent().data("section"));
          // e.preventDefault();
      });
    });
    
  </script>

<?php get_footer("applications"); ?>