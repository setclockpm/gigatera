<?php

/*

Template Name: Full Width Basic

*/
	get_header();
?>

</div><!-- #container -->

<div id="primary" class="full-width basic">

  <div class="container inner-container">
    <main id="main" class="site-main" role="main">

      <header class="navbar top-section-bar yellow-bar row">
        <div class="<?php echo 'container vertically-centered'; ?>">

          <div class="top-section-heading non-mobile text-center col-xs-12">
            <h2 class="greetings text-center">
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

