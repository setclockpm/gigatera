<?php
/**
 * Template part for displaying page content in page_case_study_single.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astrid
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-md-8 col-md-offset-2">
		<header class="entry-header">
    		<?php  echo get_post_meta($post->ID, 'Application', true); ?>
	    </header><!-- .entry-header -->


	    <div class="entry-content">
	    	<?php the_content(); ?>
	    </div><!-- .entry-content -->
	</div>
	

</article><!-- #post-## -->
