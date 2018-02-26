<?php

/*

Template Name: Case Studies: Sports Flood

*/
	get_header();
?>

</div><!-- #container -->

<div id="primary" class="case-studies">

<?php if (has_post_thumbnail()): ?>
  <div class="jumbotron with-bg subsection-title-container" style="background-image:url(<?php the_post_thumbnail_url( "full" ) ?>)">
<?php else: ?>
  <div class="jumbotron with-bg subsection-title-container">
<?php endif ?>
    <div class="subsection-heading mobile text-center">
      <h1 class="entry-title">Case Studies</h1>
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
                <li role="presentation" data-section="sports-flood" class="<?php echo(get_post_meta($post->ID, 'lighting-category', true) == 'sports-flood' ? 'active' : 'off'); ?>">
                  <a href="/case-studies/sports-flood">Sports / Flood</a>
                </li>
                <li role="presentation" data-section="bay" class="<?php echo(get_post_meta($post->ID, 'lighting-category', true) == 'bay' ? 'active' : 'off'); ?>">
                  <a href="/case-studies/bay">Bay</a>
                </li>
                <li role="presentation" data-section="roadway" class="<?php echo(get_post_meta($post->ID, 'lighting-category', true) == 'roadway' ? 'active' : 'off'); ?>">
                  <a href="/case-studies/roadway">Roadway</a>
                </li>
                <li role="presentation" data-section="facade" class="<?php echo(get_post_meta($post->ID, 'lighting-category', true) == 'facade' ? 'active' : 'off'); ?>">
                  <a href="/case-studies/facade">Facade</a>
                </li>
              </ul>
            </nav>
          </div>
        </div><!-- #container --> 
      </header>

      <div class="inner-content row">

        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'sports-flood-projects' ); ?>
        <?php endwhile; // end of the loop. ?>

      </div> 

    </main><!-- #main -->

  </div><!-- #primary -->


<?php get_footer("case-studies"); ?>

