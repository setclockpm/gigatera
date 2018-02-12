<?php

/*

Template Name: GeSS Single

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
      <?php the_title( '<h1 id="control-systems-entry-title" class="entry-title product-title gess">', '</h1>' ); ?>
    </div>
  </div>


  <div id="single-gess-container" class="<?php echo 'container'; ?>">
	  <main id="main" class="site-main" role="main">
      
      <header id="lighting-subsection-bar" class="navbar navbar-fixed-top subsection-bar row">
        <div class="<?php echo 'container vertically-centered'; ?>">
          <div class="subsection-heading non-mobile text-center col-sm-4">
            <h2 id="control-systems-entry-title" class="entry-title product-title">
              <a href="/products/control-systems">Control Systems</a>
            </h2>
          </div>

          <div id="lighting-nav-container" class="subsection-nav col-sm-8">
            <nav id="lighting-nav" class="regular section-nav">
              <ul class="nav nav-pills">
                <li role="presentation" data-section="wire" class="<?php echo(get_post_meta($post->ID, 'series', true) == 'WIRE' ? 'active' : 'inactive'); ?>">
                  <a href="/products/control-systems/gess/wire/">GeSS™ WIRE</a>
                </li>
                <li role="presentation" data-section="AIR" class="<?php echo(get_post_meta($post->ID, 'series', true) == 'AIR' ? 'active' : 'inactive'); ?>">
                  <a href="/products/control-systems/gess/air/">GeSS™ AIR</a>
                </li>
                <li role="presentation" data-section="SENSE" class="<?php echo(get_post_meta($post->ID, 'series', true) == 'SENSE' ? 'active' : 'inactive'); ?>">
                  <a href="/products/control-systems/gess/sense/">GeSS™ SENSE</a>
                </li>
                <li role="presentation" data-section="ROAD" class="<?php echo(get_post_meta($post->ID, 'series', true) == 'ROAD' ? 'active' : 'inactive'); ?>">
                  <a href="/products/control-systems/gess/road/">GeSS™ ROAD</a>
                </li>
              </ul>
            </nav>
            
            <nav id="lighting-nav" class="tablet section-nav">
              <ul class="nav nav-pills">
                <li class="label-only" role="presentation" style="background-color:transparent;">
                  GeSS™ :
                </li>
                <li role="presentation" data-section="WIRE" class="<?php echo(get_post_meta($post->ID, 'series', true) == 'WIRE' ? 'active' : 'inactive'); ?>">
                  <a href="/products/control-systems/gess/wire/">WIRE</a>
                </li>
                <li role="presentation" data-section="AIR" class="<?php echo(get_post_meta($post->ID, 'series', true) == 'AIR' ? 'active' : 'inactive'); ?>">
                  <a href="/products/control-systems/gess/air/">AIR</a>
                </li>
                <li role="presentation" data-section="SENSE" class="<?php echo(get_post_meta($post->ID, 'series', true) == 'SENSE' ? 'active' : 'inactive'); ?>">
                  <a href="/products/control-systems/gess/sense/">SENSE</a>
                </li>
                <li role="presentation" data-section="ROAD" class="<?php echo(get_post_meta($post->ID, 'series', true) == 'ROAD' ? 'active' : 'inactive'); ?>">
                  <a href="/products/control-systems/gess/road/">ROAD</a>
                </li>
              </ul>
            </nav>


          </div>

        </div><!-- #container -->

      </header>
         
      <div class="lighting-content row">

        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'single-gess' ); ?>
        <?php endwhile; // end of the loop. ?>

      </div>

	  </main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer("control-systems"); ?>

