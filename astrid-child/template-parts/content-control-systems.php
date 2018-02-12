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
    <div class="col-xs-12 text-center">
      <a href="/products/control-systems/gess/" title="<?php the_title(); ?>">
        <img src="https://gigaterausa.com/wp-content/uploads/2018/02/GeSS-S-e1517803921528.png" alt="GigaTera ecology Service System" />
      </a>
    </div>
    <div class="col-xs-10 col-xs-offset-1 headline-container">
      <h2 class="headline text-center" style="border-top:0; ">
      	<?php echo(get_post_meta($post->ID, 'headline', true)); ?>
      </h2>
    </div> 
    <!-- <h3 class="headline text-center"></h3> -->
  </header><!-- .entry-header -->


  <div class="entry-content">

  	<section id="components" class="components col-xs-10 col-xs-offset-1 blurb">
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



