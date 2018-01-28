<?php
/**
 * Template part for displaying page content in page_sports_flood_single.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astrid
 */

?>

<div id="sports-flood-series" class="col-xs-12 hentry under-fixed-nav">
  <article id="post-<?php the_ID(); ?>" <?php post_class(""); ?>>
    <header class="entry-header">

	  <?php if (count(get_post_custom_values('variant')) > 0) : ?>
	    <div class="product-tab">
          <ul class="clearfix">
            <li class="<?php echo(get_post_meta($post->ID, 'series', true) == 'maha' ? 'active' : 'inactive'); ?>">
              <a href="/products/lighting/sports-flood/maha">MAHA</a>
            </li>
            <li class="<?php echo(get_post_meta($post->ID, 'series', true) == 'maha-neo' ? 'active' : 'inactive'); ?>">
              <a href="/products/lighting/sports-flood/maha-neo">MAHA-NEO</a>
            </li>
          </ul>
        </div>
      <?php endif; ?>	
	</header><!-- .entry-header -->

	
    
  

	<?php if ( has_post_thumbnail() ) : ?>
	  <div class="product-images-container">
		<img class="alignleft" src="https://gigaterausa.com/wp-content/uploads/2018/01/<?php echo get_post_meta($post->ID, 'series', true); ?>-1.png">
	  </div>
  
	<?php endif; ?>	

	<div class="entry-content">
		<?php
			the_content();
		?>

	</div><!-- .entry-content -->

  </article><!-- #post-## -->

</div>

