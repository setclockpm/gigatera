<?php
/**
 * Template part for displaying page content in page_gess.php.
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
        <!-- <img src="https://gigaterausa.com/wp-content/uploads/2018/02/GeSS-W.png" alt="GigaTera ecology Service System" /> -->
  	  </a>
    </div>
    <h2 class="headline text-center"></h2>
  </header><!-- .entry-header -->


  <div class="entry-content">
  	<section id="main-blurb" class="col-xs-10 col-xs-offset-1 blurb">
  	   <?php the_content(); ?>
  	</section>

  	<section id="features-list" class="col-xs-10 col-xs-offset-1">
  		<h3 class="headline text-center"><?php echo(get_post_meta($post->ID, 'sub-headline', true)); ?></h3>

  		<ol class="feature-list">
  			<li class="feature">
  			  <h5 data-color="#10487E"><?php echo(get_post_meta($post->ID, 'highlight1', true)); ?></h5>
          The <span class="gess">GeSS™</span> control system provides different supports, including streetlight as well as wireless, wired, and sensor controls that allows even for hybrid controls to be implemented by combining any of them upon customer request. With this hybrid control, a customized control system can be implemented based on usage conditions with theadvantage of energy savings and services.
  			</li>
  			<li class="feature">
  			  <h5 data-color="#10487E"><?php echo(get_post_meta($post->ID, 'highlight2', true)); ?></h5>
          The <span class="gess">GeSS™</span> control system supports wireless and wired standard protocols.
  			</li>
  			<li class="feature">
  			  <h5 data-color="#10487E"><?php echo(get_post_meta($post->ID, 'highlight3', true)); ?></h5>
          The <span class="gess">GeSS™</span> control system provides individual and group controls. With this function user can set different on/off time and intensities in different areas for the optimal energy savings and automatically or manually control the lighting using a GUI or central console without visiting the site.
  			</li>
  			<li class="feature">
  			  <h5 data-color="#10487E"><?php echo(get_post_meta($post->ID, 'highlight4', true)); ?></h5>
          The <span class="gess">GeSS™</span> control system is a solution dedicated to GigaTera LED lighting, making it more reliable than other control systems. The main GigaTera street lights, META and HERA, have the wireless node system (ZB Node). Indoor lights, such as Bela, Verona, and Galaxy, have the  1-10V, DMX-512, DALI control board, and indoor ceiling lights, including IBL, NANA, and SORA, which detects the sensors. Different GigaTera lighting products are perfectly controlled by the GeSS™ system.
  			</li>
  			<li class="feature">
  			  <h5 data-color="#10487E"><?php echo(get_post_meta($post->ID, 'highlight5', true)); ?></h5>
          The <span class="gess">GeSS™</span> control system can save energy consumption and maintenance costs.
  			</li>
  		</ol>

  	</section>	

    
  </div><!-- .entry-content -->

</article><!-- #post-## -->
