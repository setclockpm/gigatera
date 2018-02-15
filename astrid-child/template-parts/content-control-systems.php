<?php
/**
 * Template part for displaying page content in page_control_systems.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astrid
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class("col-md-12 under-fixed-nav"); ?>>
  
  <header class="entry-header">
    
    <div class="col-xs-10 col-xs-offset-1">
      <img src="https://gigaterausa.com/wp-content/uploads/2018/02/GeSS-W.png" alt="GeSS™" />
    </div>
    <div class="col-xs-12 row">
      <h3 id="control-system-header-bg" class="headline">
        <div class="col-xs-10 col-xs-offset-1 text-left">
          <?php echo(get_post_meta($post->ID, 'headline', true)); ?>
        </div>
      </h3>
    </div>
    
    
  </header><!-- .entry-header -->


  <div class="entry-content">

  	<section class="opening-paragraph col-xs-10 col-xs-offset-1 blurb">
  	  <?php the_content(); ?>
  	</section>

    <section id="example-application" class="col-xs-10 col-xs-offset-1 blurb" style="margin-bottom:40px;">
      
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



