<?php
/**
 * Template part for displaying page content in page_applications.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astrid
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("col-md-9"); ?>>
  <header class="entry-header">
    <h2 id="main-title" itemprop="headline" class="tagline applications-tagline">Professional Experince Worldwide</h2>
  </header><!-- .entry-header -->

  
    
  

  <div class="entry-content">
    <?php the_content(); ?>

    <?php if ( has_post_thumbnail() ) : ?>
      <div class="single-thumb">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail('astrid-large-thumb'); ?>
        </a>
      </div>
    <?php endif; ?> 

  </div><!-- .entry-content -->

</article><!-- #post-## -->


