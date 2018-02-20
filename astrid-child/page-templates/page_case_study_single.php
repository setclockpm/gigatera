<?php

/*

Template Name: Case Study Single

*/
	get_header();
?>

	<div id="primary" class="lighting">
	  <main id="main" class="site-main" role="main">

      <?php if (has_post_thumbnail()): ?>
        <div class="applications-title-container" style="background-image: url(<?php the_post_thumbnail_url( "full" ) ?>);">
      <?php else: ?>
        <div class="applications-title-container background-sports-flood">
      <?php endif ?>
        <div class="applications-title page">
          <header class="entry-header">
            <h1 id="applications-entry-title" class="entry-title case-study-title">
              <?php the_title( '<h1 id="series-entry-title" class="entry-title">', '</h1>' ); ?>
            </h1>
          </header>
        </div>
      </div>
      
      
      <div id="applications-container" class="applications-content">

        <nav id="applied-projects" class="navbar navbar-fixed-top section-nav">
          <ul class="nav nav-pills">
            <li role="presentation" data-section="Sports / Flood">
              <a href="/case-studies/sports-flood">Sports / Flood</a>
            </li>
            <li role="presentation" data-section="Bay">
              <a href="/case-studies/bay">Bay</a>
            </li>
            <li role="presentation" data-section="Roadway">
              <a href="/case-studies/roadway">Roadway</a>
            </li>
            <li role="presentation" data-section="Facade">
              <a href="/case-studies/facade">Facade</a>
            </li>
          </ul>
        </nav>
        
  	  	<?php while ( have_posts() ) : the_post(); ?>
          
  	  		<?php get_template_part( 'template-parts/content', 'single-case-study' ); ?>
	  		
  	  	<?php endwhile; // end of the loop. ?>
      </div>
          
	  </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer("applications"); ?>
