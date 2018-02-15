<?php

/*

Template Name: Control Systems Main

*/
	get_header();
?>
</div><!-- #container -->


<div id="primary" class="lighting">

<?php if (has_post_thumbnail()): ?>
  <div class="lighting-title-container subsection-title-container" style="background-image:url(<?php the_post_thumbnail_url( "full" ) ?>);">
<?php else: ?>
  <div class="lighting-title-container subsection-title-container lighting-main-background">
<?php endif ?>
    <div class="subsection-heading mobile text-center">
      <?php the_title( '<h1 id="control-systems-entry-title" class="entry-title product-title">', '</h1>' ); ?>
    </div>
  </div>

  <div id="control-systems-container" class="<?php echo 'container'; ?>">
	  <main id="main" class="site-main" role="main">
      
      <header id="lighting-subsection-bar" class="navbar navbar-fixed-top subsection-bar row">
        <div class="<?php echo 'container vertically-centered'; ?>">
          <div class="subsection-heading non-mobile text-center col-sm-5">
            <h2 id="control-systems-entry-title" class="entry-title product-title">Control System</h2>
          </div>

          <div id="lighting-nav-container" class="col-sm-7">
            <nav id="lighting-nav" class="section-nav">
              <ul class="nav nav-pills">
                <li role="presentation" data-section="GeSS">
                  <a href="/products/control-systems/gess/">GeSS™</a>
                </li>
                <li role="presentation" data-section="Equipment">
                  <a href="/products/control-systems/equipment/">Equipment</a>
                </li>
              </ul>
            </nav>
          </div>
        </div><!-- #container -->

      </header>
         
      <div class="lighting-content row">

        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'control-systems' ); ?>
        <?php endwhile; // end of the loop. ?>

      </div>

	  </main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer("control-systems"); ?>

