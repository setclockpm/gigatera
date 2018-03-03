<?php

/*

Template Name: Case Studies Main

*/
	get_header();
?>

</div><!-- #container -->

<div id="primary" class="lighting case-studies">

<?php if (has_post_thumbnail()): ?>
  <div class="jumbotron with-bg subsection-title-container" style="background-image:url(<?php the_post_thumbnail_url( "full" ) ?>)">
<?php else: ?>
  <div class="jumbotron with-bg subsection-title-container">
<?php endif ?>
    <div class="subsection-heading mobile text-center">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div>
  </div>


  <div class="container inner-container">
    <main id="main" class="site-main" role="main">
      <header id="case-studies-subsection-bar" class="navbar navbar-fixed-top subsection-bar row">

        <div class="<?php echo 'container vertically-centered'; ?>">
          <div class="subsection-heading non-mobile text-center col-sm-5">
            <h2 class="entry-title product-title">Installation Type:</h2>
          </div>

          <div id="lighting-nav-container" class="col-sm-7">
            <nav id="lighting-nav" class="section-nav">
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
          </div>
        </div><!-- #container --> 
      </header>

      <div class="inner-content row">

        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'case-studies' ); ?>
        <?php endwhile; // end of the loop. ?>

      </div> 

    </main><!-- #main -->

	</div><!-- #primary -->


<?php get_footer("case-studies"); ?>

