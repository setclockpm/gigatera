<?php

/*

Template Name: Full Width

*/
	get_header();
?>

</div><!-- #container -->

<div id="primary" class="full-width">

<?php if (has_post_thumbnail()): ?>
  <div class="subsection-title-container cover-no-repeat" style="background-image:url(<?php the_post_thumbnail_url( "full" ) ?>);">
<?php else: ?>
  <div class="subsection-title-container">
<?php endif ?>
    <div class="subsection-heading mobile text-center">
      
    </div>
  </div>


  <div class="container inner-container">
    <main id="main" class="site-main" role="main">

      <header id="lighting-subsection-bar" class="navbar navbar-fixed-top subsection-bar row">
        <div class="<?php echo 'container vertically-centered'; ?>">

          <div class="subsection-heading non-mobile text-center col-xs-12">
            <h2 id="lighting-entry-title" class="entry-title product-title">
              <?php echo(get_post_meta($post->ID, 'headline', true)); ?>
            </h2>
          </div>
        </div><!-- #container --> 
      </header>

      <div class="row">

        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'plain' ); ?>
        <?php endwhile; // end of the loop. ?>

      </div> 

    </main><!-- #main -->
  </div><!-- #container -->

<?php get_footer("minimal"); ?>

