 <?php
/**
 * Template part for displaying page content in page_equipment.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astrid
 */

?>

<div id="<?php echo(get_post_meta($post->ID, 'series', true)); ?>" class="col-xs-12 hentry under-fixed-nav">


  <article id="post-<?php the_ID(); ?>" <?php post_class("product-detail gess-product"); ?>>
    
    <header class="entry-header">
      <div class="col-xs-12 text-center">
        <a href="/products/control-systems/gess/" title="<?php the_title(); ?>">
          <img src="https://gigaterausa.com/wp-content/uploads/2018/02/GeSS-S-e1517803921528.png" alt="GigaTera ecology Service System" />
        </a>
      </div>
      <div class="col-xs-10 col-xs-offset-1 headline-container">
        <h2 class="headline text-center" style="margin-top:0px;">
          <?php echo(get_post_meta($post->ID, 'headline', true)); ?>
        </h2>
      </div> 
      <!-- <h3 class="headline text-center"></h3> -->
    </header><!-- .entry-header -->


    <div class="product-images-container row">

      <div class="col-xs-12 col-md-6">
        <img src="<?php echo get_post_meta($post->ID, 'photo-url', true); ?>">
      </div>

      <div class="col-xs-12 col-md-6 desc">
        <?php if (get_post_custom_values('model')) : ?>
          <section class="model-name">
            <span class="head"><h3>Model Name</h3></span>
            <?php if (get_post_custom_values('model-alt')) : ?>
              <?php if (get_post_custom_values('model')) : ?>
                <p style="margin-bottom:0px;">Wired Control Unit: &nbsp;<?php echo(get_post_meta($post->ID, 'model', true)); ?></p>
              <?php endif; ?>
                <p style="margin-bottom:0px;">Wireless Control Unit: &nbsp;<?php echo(get_post_meta($post->ID, 'model-alt', true)); ?></p>
            <?php else : ?>
              <?php if (count(get_post_custom_values('model')) > 0) : ?>
                <p>Model Name: &nbsp;<?php echo(get_post_meta($post->ID, 'model', true)); ?></p>
              <?php endif; ?>
            <?php endif; ?>
          </section>
        <?php endif; ?> 
        <?php if (get_post_custom_values('Application')) : ?>
          <section class="applications">
            <span class="head"><h3>Typical Applications</h3></span>
            <?php echo(get_post_meta($post->ID, 'Application', true)); ?>
          </section>
        <?php endif; ?> 
        <?php if (get_post_custom_values('Certifications')) : ?>
          <section class="certifications">
            <span class="head"><h3>Certifications</h3></span>
            <?php echo(get_post_meta($post->ID, 'Certifications', true)); ?>
          </section>
        <?php endif; ?>

       
        <?php if (count(get_post_custom_values('highlight1')) > 0) : ?>
          <section class="highlights">
            <span class="head"><h3>Highlights</h3></span>
            <ul class="highlights">
              <?php if (count(get_post_custom_values('highlight1')) > 0) : ?>
                <li><?php echo(get_post_meta($post->ID, 'highlight1', true)); ?></li>
              <?php endif; ?>
              <?php if (count(get_post_custom_values('highlight2')) > 0) : ?>
                <li><?php echo(get_post_meta($post->ID, 'highlight2', true)); ?></li>
              <?php endif; ?>
              <?php if (count(get_post_custom_values('highlight3')) > 0) : ?>
                <li><?php echo(get_post_meta($post->ID, 'highlight3', true)); ?></li>
              <?php endif; ?>
              <?php if (count(get_post_custom_values('highlight4')) > 0) : ?>
                <li><?php echo(get_post_meta($post->ID, 'highlight4', true)); ?></li>
              <?php endif; ?> 
              <?php if (count(get_post_custom_values('highlight5')) > 0) : ?>
                <li><?php echo(get_post_meta($post->ID, 'highlight5', true)); ?></li>
              <?php endif; ?> 
            </ul>
          </section>
        <?php endif; ?>
      </div>

    </div>

    <div class="entry-content">
      <section class="specs">
        <?php if (get_post_custom_values('Certifications')) : ?>
          <div class="head" style="margin-top:40px;">
            <h3><?php echo(get_post_meta($post->ID, 'series', true)); ?> Specifications</h3>
          </div>
        <?php endif; ?> 
        <div class="list">
          <?php if (count(get_post_custom_values('Junction Box')) > 0) : ?>
            <p>Junction Box: &nbsp;<?php echo(get_post_meta($post->ID, 'Junction Box', true)); ?></p>
          <?php endif; ?>
          <?php if (count(get_post_custom_values('Light Distribution')) > 0) : ?>
            <p>Light Distribution: &nbsp;<?php echo(get_post_meta($post->ID, 'Light Distribution', true)); ?></p>
          <?php endif; ?>
          <?php if (count(get_post_custom_values('Mounting Options')) > 0) : ?>
            <p>Mounting Option: <?php echo(get_post_meta($post->ID, 'Mounting Options', true)); ?></p>
          <?php endif; ?>
          
          <?php if (count(get_post_custom_values('available-colors')) > 0) : ?>
            <p>Colors (Temp): &nbsp;<?php echo(get_post_meta($post->ID, 'available-colors', true)); ?></p>
          <?php endif; ?>
        </div>

        <?php if (count(get_post_custom_values('photo-url-r')) > 0) : ?>
          <div class="text-center" style="margin-top: 25px;">
            <img src="<?php echo get_post_meta($post->ID, 'photo-url-r', true); ?>">
          </div>
        <?php endif; ?>
      </section>
        
     
      <?php the_content(); ?>
      

      <section id="example-application" class="col-xs-10 col-xs-offset-1 blurb">
        
        <div>
          <?php if ( get_post_meta($post->ID, 'control-system-wired', true) ) : ?>
            <h3 class="ordered-section"><?php echo(get_post_meta($post->ID, 'control-system-wired', true)); ?></h3>
            <?php echo(get_post_meta($post->ID, 'control-system-wired-example', true)); ?>
            <?php if ( get_post_meta($post->ID, 'photo-url', true) ) : ?>
              <img src="<?php echo get_post_meta($post->ID, 'photo-url', true); ?>">
            <?php endif; ?> 
          <?php endif; ?>
          <?php if ( get_post_meta($post->ID, 'control-system-wireless', true) ) : ?>
            <h3 class="ordered-section"><?php echo(get_post_meta($post->ID, 'control-system-wireless', true)); ?></h3>
            <?php echo(get_post_meta($post->ID, 'control-system-wireless-example', true)); ?>
            <?php if ( get_post_meta($post->ID, 'photo-url', true) ) : ?>
              <img src="<?php echo get_post_meta($post->ID, 'photo-url', true); ?>">
            <?php endif; ?> 
          <?php endif; ?> 
        </div>

      </section>  
    
      </div><!-- .entry-content -->
  </article><!-- #post-## -->

</div>


