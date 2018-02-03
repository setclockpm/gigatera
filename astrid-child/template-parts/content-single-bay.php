<?php
/**
 * Template part for displaying page content in page_single_bay.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astrid
 */

?>

<div id="bay-series" class="col-xs-12 hentry under-fixed-nav">
  <article id="post-<?php the_ID(); ?>" <?php post_class("product-detail"); ?>>
    <header class="entry-header">

	  <?php if (count(get_post_custom_values('version')) > 0) : ?>
	    <div class="product-tab">
        <ul class="clearfix">
          <li class="<?php echo(get_post_meta($post->ID, 'series', true) == 'SEGA' ? 'active' : 'inactive'); ?>">
            <a href="/products/lighting/bay/sega">SEGA</a>
          </li>
          <li class="<?php echo(get_post_meta($post->ID, 'series', true) == 'SEGA-HIGH POWER' ? 'active' : 'inactive'); ?>">
            <a style="font-family:'PT Sans Narrow', sans-serif;" href="/products/lighting/bay/sega-h">SEGA-HIGH POWER</a>
          </li>
        </ul>
      </div>
    <?php endif; ?>
    <h2 class="tagline text-center"><?php echo(get_post_meta($post->ID, 'tagline', true)); ?></h2>

	</header><!-- .entry-header -->

	
    
  

    <div class="product-images-container row">
      <div class="col-xs-12 col-md-6">
        <img src="<?php echo get_post_meta($post->ID, 'photo-url', true); ?>">
      </div>
      <div class="col-xs-12 col-md-6 desc">
        <ul>
          <li><?php echo(get_post_meta($post->ID, 'highlight1', true)); ?></li>
          <li><?php echo(get_post_meta($post->ID, 'highlight2', true)); ?></li>
          <li><?php echo(get_post_meta($post->ID, 'highlight3', true)); ?></li>
          <?php if (count(get_post_custom_values('highlight4')) > 0) : ?>
            <li><?php echo(get_post_meta($post->ID, 'highlight4', true)); ?></li>
          <?php endif; ?> 
          <?php if (count(get_post_custom_values('highlight5')) > 0) : ?>
            <li><?php echo(get_post_meta($post->ID, 'highlight5', true)); ?></li>
          <?php endif; ?> 
        </ul>
      </div>
    </div>

    <div class="entry-content">
      <section class="applications">
        <span class="head"><h3>Typical Applications</h3></span>
          <?php echo(get_post_meta($post->ID, 'Application', true)); ?>
      </section>
      <?php if (get_post_custom_values('Certifications')) : ?>
        <section class="certifications">
          <span class="head"><h3>Certifications</h3></span>
          <?php echo(get_post_meta($post->ID, 'Certifications', true)); ?>
        </section>
      <?php endif; ?>   
     
      <?php the_content(); ?>
  
    </div><!-- .entry-content -->
  </article><!-- #post-## -->

</div>
