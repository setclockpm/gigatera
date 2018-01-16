<?php

/*

Template Name: Products Landing

*/
	get_header();
?>

	<div id="primary" class="content-area fullwidth products">
	  <main id="main" class="site-main" role="main">
          
             
	  	<?php while ( have_posts() ) : the_post(); ?>
          
	  		<?php get_template_part( 'template-parts/content', 'products' ); ?>
	  		
	  	<?php endwhile; // end of the loop. ?>
          
          
	  </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer("products"); ?>

