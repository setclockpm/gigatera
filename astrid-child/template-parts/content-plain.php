<?php
/**
 * Template part for displaying page content in page_fullwidth.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astrid
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(""); ?>>

  <div class="entry-content grid-container">
  	<?php if (get_post_custom_values('subheader-img-url')) : ?>
      <div class="subheader-img">
        <img src="<?php echo get_post_meta($post->ID, 'subheader-img-url', true); ?>">
      </div>
    <?php endif; ?> 

    <?php the_content(); ?>

    <?php if (get_post_custom_values('prefooter-img-url')) : ?>
      <div class="prefooter-img">
        <img src="<?php echo get_post_meta($post->ID, 'prefooter-img-url', true); ?>">
      </div>
    <?php endif; ?> 
    

  </div><!-- .entry-content -->

</article><!-- #post-## -->



