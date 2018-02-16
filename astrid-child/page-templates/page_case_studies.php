<?php

/*

Template Name: Case Studies Main

*/
	get_header();
?>

</div><!-- #container -->

<div id="primary" class="lighting case-studies">

<?php if (has_post_thumbnail()): ?>
  <neader class="jumbo-with-bg subsection-title-container" style="background-image:url(<?php the_post_thumbnail_url( "full" ) ?>)">
<?php else: ?>
  <neader class="jumbo-with-bg subsection-title-container lighting-main-background">
<?php endif ?>
    <div class="subsection-heading mobile text-center">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div>
  </header>



	  <main id="main" class="site-main" role="main">

      
      <div class="applications-title-container applications-background">
        <div class="applications-title page">
          <header class="entry-header">
            <h1 id="applications-entry-title" class="entry-title">Case Studies</h1>
          </header>
        </div>
      </div>
      
      
      <div id="applications-container" class="applications-content">

        <nav id="applied-projects" class="navbar navbar-fixed-top section-nav">
          <ul class="nav nav-pills">
            <li role="presentation" data-section="Sports / Flood Lighting Projects">
              <a href="/applications/sports-flood-lighting">Sports / Flood Lighting</a>
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

