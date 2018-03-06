<?php

/*

Template Name: Full width

*/
	get_header();
?>

<!-- </div>#container -->


	<div id="primary" class="content-area fullwidth">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php

					if ( comments_open() || '0' != get_comments_number() ) :

						comments_template();

					endif;
				?>

			<?php endwhile; // end of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->



	</div><!-- #container -->

<div id="primary" class="content-area fullwidth">

<?php if (has_post_thumbnail()): ?>
  <div class="subsection-title-container" style="background-image:url(<?php the_post_thumbnail_url( "full" ) ?>);">
<?php else: ?>
  <div class="subsection-title-container">
<?php endif ?>
    <div class="subsection-heading mobile text-center">
      <?php the_title( '<h1 class="entry-title product-title">', '</h1>' ); ?>
    </div>
  </div>


  <div class="<?php echo 'container'; ?>">
    <main id="main" class="site-main" role="main">
      <header id="lighting-subsection-bar" class="navbar navbar-fixed-top subsection-bar row">

        <div class="<?php echo 'container vertically-centered'; ?>">
          <div class="subsection-heading non-mobile text-center col-xs-12">
            <h2 id="lighting-entry-title" class="entry-title product-title">CONTACT US</h2>
          </div>
        </div><!-- #container --> 
      </header>

      <div class="lighting-content row">

        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'lighting' ); ?>
        <?php endwhile; // end of the loop. ?>

      </div> 

    </main><!-- #main -->
  </div><!-- #container -->

<?php get_footer("minimal"); ?>

