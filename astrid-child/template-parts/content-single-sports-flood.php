<?php
/**
 * Template part for displaying page content in page_sports_flood_single.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astrid
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("col-md-9"); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 id="series-entry-title" class="entry-title">', '</h1>' ); ?>

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
	<div class="single-thumb">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('astrid-large-thumb'); ?></a>
	</div>
  
	<?php endif; ?>	

	<div class="entry-content">
		<?php
			the_content();
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
