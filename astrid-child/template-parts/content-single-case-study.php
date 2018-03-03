<?php
/**
 * Template part for displaying page content in page_case_study_single.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astrid
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class("col-sm-12 under-fixed-nav"); ?>>
  <header class="entry-header">
    <h3 id="main-title" itemprop="headline" class="tagline applications-tagline">
      <?php echo(get_post_meta($post->ID, 'headline', true)); ?>
    </h3>
  </header><!-- .entry-header -->

  

  <div class="entry-content">
  	<div class="intro">
  	  <p><?php echo(get_post_meta($post->ID, 'headline-blurb', true)); ?></p>
    </div>
    
    <?php the_content(); ?>

  </div><!-- .entry-content -->

</article><!-- #post-## -->