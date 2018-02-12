<?php
/**
 * Template part for displaying page content in page_single_gess.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astrid
 */

?>

<div id="<?php echo(get_post_meta($post->ID, 'lighting-category', true)); ?>-series" class="col-xs-12 hentry under-fixed-nav">
  <article id="post-<?php the_ID(); ?>" <?php post_class("gess product-detail"); ?>>
    <header class="entry-header">
      <?php if ( has_post_thumbnail() ) : ?>
        <div class="col-xs-12 text-center">
          <a href="/products/control-systems/gess/" title="<?php the_title(); ?>">
            <img src="https://gigaterausa.com/wp-content/uploads/2018/02/GeSS-S-e1517803921528.png" alt="GigaTera ecology Service System"/>
          </a>
        </div>
      <?php endif; ?> 
    </header><!-- .entry-header -->

  
    <section id="intro" class="row">
      <div class="entry-content col-xs-12">
        <h2 class="headline text-center"><?php echo(get_post_meta($post->ID, 'headline', true)); ?></h2>
        <?php if ( get_post_meta($post->ID, 'headline-blurb', true) ) : ?>
          <div class="col-xs-10 col-xs-offset-1 blurb" style="margin-top:30px;">
            <?php echo(get_post_meta($post->ID, 'headline-blurb', true)); ?>
          </div>
        <?php endif; ?>
      </div>
    </section>
  

    <section class="row">
      <div class="entry-content col-xs-10 col-xs-offset-1 blurb">

        <?php if ( get_post_meta($post->ID, 'highlight1', true) ) : ?>
          <h3 class="ordered-section">
            <?php echo(get_post_meta($post->ID, 'highlight1', true)); ?>
          </h3>
          <?php echo(get_post_meta($post->ID, 'highlight1-blurb', true)); ?>
          <?php if ( get_post_meta($post->ID, 'photo-url-r', true) ) : ?>
            <img style="border:0;" src="<?php echo get_post_meta($post->ID, 'photo-url-r', true); ?>">
          <?php endif; ?>
        <?php endif; ?>
        <?php if ( get_post_meta($post->ID, 'highlight2', true) ) : ?>
          <h3 class="ordered-section"><?php echo(get_post_meta($post->ID, 'highlight2', true)); ?></h3>
          <?php echo(get_post_meta($post->ID, 'highlight2-blurb', true)); ?>
          <?php if ( get_post_meta($post->ID, 'photo-url-g', true) ) : ?>
            <div class="text-center">
              <img src="<?php echo get_post_meta($post->ID, 'photo-url-g', true); ?>">
            </div>
          <?php endif; ?> 
        <?php endif; ?>
        <?php if ( get_post_meta($post->ID, 'highlight3', true) ) : ?>
          <h3 class="ordered-section"><?php echo(get_post_meta($post->ID, 'highlight3', true)); ?></h3>
          <?php echo(get_post_meta($post->ID, 'highlight3-blurb', true)); ?>
          <?php if ( get_post_meta($post->ID, 'photo-url-b', true) ) : ?>
            <div class="text-center">
              <img src="<?php echo get_post_meta($post->ID, 'photo-url-b', true); ?>">
            </div>
          <?php endif; ?> 
        <?php endif; ?>
        <?php if ( get_post_meta($post->ID, 'highlight4', true) ) : ?>
          <h3 class="ordered-section"><?php echo(get_post_meta($post->ID, 'highlight4', true)); ?></h3>
          <?php echo(get_post_meta($post->ID, 'highlight4-blurb', true)); ?>
          <?php if ( get_post_meta($post->ID, 'photo-url', true) ) : ?>
            <div class="text-center">
              <img src="<?php echo get_post_meta($post->ID, 'photo-url', true); ?>">
            </div>
          <?php endif; ?> 
        <?php endif; ?>
        <?php if ( get_post_meta($post->ID, 'control-system-wired', true) ) : ?>
          <h3><?php echo(get_post_meta($post->ID, 'control-system-wired', true)); ?></h3>
          <h5><?php echo(get_post_meta($post->ID, 'control-system-wired-example', true)); ?></h5>
          <?php if ( get_post_meta($post->ID, 'photo-url', true) ) : ?>
            <img src="<?php echo get_post_meta($post->ID, 'footer-photo-url', true); ?>">
          <?php endif; ?> 
        <?php endif; ?>
        <?php if ( get_post_meta($post->ID, 'control-system-wireless', true) ) : ?>
          <h3><?php echo(get_post_meta($post->ID, 'control-system-wireless', true)); ?></h3>
          <h5><?php echo(get_post_meta($post->ID, 'control-system-wireless-example', true)); ?></h5>
          <?php if ( get_post_meta($post->ID, 'photo-url', true) ) : ?>
            <img src="<?php echo get_post_meta($post->ID, 'footer-photo-url', true); ?>">
          <?php endif; ?> 
        <?php endif; ?> 

        <?php the_content(); ?>
         
      </div><!-- .entry-content -->

    </section>

  </article><!-- #post-## -->

</div>

 