<?php
/**
 * Template part for displaying page content in page_facade_single.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astrid
 */

?>


<div id="facade-series" class="col-xs-12 hentry under-fixed-nav">

  <article id="post-<?php the_ID(); ?>" <?php post_class("product-detail"); ?>>

    <header class="entry-header">
      <?php if (count(get_post_custom_values('version')) > 0) : ?>
        <div class="product-tab">
          <ul class="clearfix">
            <li class="<?php echo(get_post_meta($post->ID, 'series', true) == 'SUFA-X-RGB' ? 'active' : 'inactive'); ?>">
              <a href="/products/lighting/facade/sufa-x-rgb">SUFA-X-RGB</a>
            </li>
            <li class="<?php echo(get_post_meta($post->ID, 'series', true) == 'SUFA-X-R/G/B' ? 'active' : 'inactive'); ?>">
              <a href="/products/lighting/facade/sufa-x-r-g-b">SUFA-X-R/G/B</a>
            </li>
          </ul>
        </div>
      <?php endif; ?> 
      <h2 class="tagline text-center"><?php echo(get_post_meta($post->ID, 'tagline', true)); ?></h2>
    </header><!-- .entry-header --> 
    
  

    <div class="product-images-container row">
      <?php if (get_post_meta($post->ID, 'series', true) == 'SUFA-X-R/G/B') : ?>

        <div class="row">
          <div class="col-xs-4">
            <img src="<?php echo get_post_meta($post->ID, 'photo-url-r', true); ?>">
          </div>
          <div class="col-xs-4">
            <img src="<?php echo get_post_meta($post->ID, 'photo-url-g', true); ?>">
          </div>
          <div class="col-xs-4">
            <img src="<?php echo get_post_meta($post->ID, 'photo-url-b', true); ?>">
          </div>
        </div>

        <div class="full-row">

          <div class="col-xs-12 col-md-6 desc">
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
            <?php if (get_post_custom_values('spec-sheet-dl')) : ?>
              <section class="downloads">
                <span class="head"><h3>Downloads</h3></span>
                <a href="<?php echo(get_post_meta($post->ID, 'spec-sheet-dl', true)); ?>" class="spec-sheet" title="spec-sheet.pdf">Spec Sheet (pdf)</a>
              </section>
            <?php endif; ?> 
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

      <?php else : ?>
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
          <?php if (get_post_custom_values('spec-sheet-dl')) : ?>
            <section class="downloads">
              <span class="head"><h3>Downloads</h3></span>
              <a href="<?php echo(get_post_meta($post->ID, 'spec-sheet-dl', true)); ?>" class="spec-sheet" title="spec-sheet.pdf">Spec Sheet (pdf)</a>
            </section>
          <?php endif; ?> 
        </div>
      <?php endif; ?> 
    </div>
  
    <div class="entry-content">
      <section class="specs">
        <div class="head" style="margin-top:40px;">
          <h3>Specifications</h3>
        </div>
        <div class="list">
          <p>Body: &nbsp;<?php echo(get_post_meta($post->ID, 'Body', true)); ?></p>
            
          <p>Cover: &nbsp;<?php echo(get_post_meta($post->ID, 'Cover', true)); ?></p>
          <p>Finish: &nbsp;<?php echo(get_post_meta($post->ID, 'Finish', true)); ?></p>
          <?php if (count(get_post_custom_values('Junction Box')) > 0) : ?>
            <p>Junction Box: &nbsp;<?php echo(get_post_meta($post->ID, 'Junction Box', true)); ?></p>
          <?php endif; ?>
          <?php if (count(get_post_custom_values('Light Distribution')) > 0) : ?>
            <p>Light Distribution: &nbsp;<?php echo(get_post_meta($post->ID, 'Light Distribution', true)); ?></p>
          <?php endif; ?>
          <?php if (count(get_post_custom_values('Mounting Options')) > 0) : ?>
            <p>Mounting Option: <?php echo(get_post_meta($post->ID, 'Mounting Options', true)); ?></p>
          <?php endif; ?>
          <p>
            <span class="text-underline">Control System </span>
            <?php if (count(get_post_custom_values('control-system-wired')) > 0) : ?>
              <p class="nest">Wired: &nbsp;<?php echo(get_post_meta($post->ID, 'control-system-wired', true)); ?></p>
            <?php endif; ?>
            <?php if (count(get_post_custom_values('control-system-wireless')) > 0) : ?>
              <p class="nest">Wireless: &nbsp;<?php echo(get_post_meta($post->ID, 'control-system-wireless', true)); ?></p>
            <?php endif; ?>
          </p>
          
          
          <?php if (count(get_post_custom_values('available-colors')) > 0) : ?>
            <p>Colors: &nbsp;<?php echo(get_post_meta($post->ID, 'available-colors', true)); ?></p>
          <?php endif; ?>

        </div>
      </section>

      <?php the_content(); ?>

    </div><!-- .entry-content -->
  </article><!-- #post-## -->
</div>

