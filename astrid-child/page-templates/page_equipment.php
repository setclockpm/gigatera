<?php

/*

Template Name: Equipment Main

*/
	get_header();
?>
</div><!-- #container -->

<div id="primary" class="lighting">

<?php if (has_post_thumbnail()): ?>
  <div class="lighting-title-container subsection-title-container" style="background-image:url(<?php the_post_thumbnail_url( "full" ) ?>);">
<?php else: ?>
  <div class="lighting-title-container subsection-title-container lighting-main-background">
<?php endif ?>
    <div class="subsection-heading mobile text-center">
      <?php the_title( '<h1 id="control-systems-entry-title" class="entry-title product-title">', '</h1>' ); ?>
    </div>
  </div>


  <div id="control-systems-container" class="<?php echo 'container'; ?>">
	  <main id="main" class="site-main" role="main">
      
      <header id="lighting-subsection-bar" class="navbar navbar-fixed-top subsection-bar row">
        <div class="<?php echo 'container vertically-centered'; ?>">
          <div class="subsection-heading non-mobile text-center col-sm-4">
            <h2 id="control-systems-entry-title" class="entry-title product-title" style="font-size:1.4em;">
              <a href="/products/control-systems">Controls: Equipment</a>
            </h2>
          </div>

          <div id="lighting-nav-container" class="subsection-nav col-sm-8">
            <nav id="lighting-nav" class="regular section-nav">
              <ul class="nav nav-pills">
                <li role="presentation" data-section="Master Unit" class="<?php echo(get_post_meta($post->ID, 'series', true) == 'Master Unit' ? 'active' : 'inactive'); ?>">
                  <a href="/products/control-systems/equipment/master-unit/">Master Unit</a>
                </li>
                <li role="presentation" data-section="USB Converter" class="<?php echo(get_post_meta($post->ID, 'series', true) == 'USB Converter' ? 'active' : 'inactive'); ?>">
                  <a href="/products/control-systems/equipment/usb-converter/">USB Converter</a>
                </li>
                <li role="presentation" data-section="Server" class="<?php echo(get_post_meta($post->ID, 'series', true) == 'Server' ? 'active' : 'inactive'); ?>">
                  <a href="/products/control-systems/equipment/server/">Gateway / GeSS-Server</a>
                </li>
                <li role="presentation" data-section="IPC Switch" class="<?php echo(get_post_meta($post->ID, 'series', true) == 'IPC Switch' ? 'active' : 'inactive'); ?>">
                  <a href="/products/control-systems/equipment/ipc-switch/">IPC Switch</a>
                </li>
              </ul>
            </nav>
            
            <nav id="lighting-nav" class="tablet section-nav">
              <ul class="nav nav-pills">
                <li role="presentation" data-section="Master Unit" class="<?php echo(get_post_meta($post->ID, 'series', true) == 'Master Unit' ? 'active' : 'inactive'); ?>">
                  <a href="/products/control-systems/equipment/master-unit/">Master Unit</a>
                </li>
                <li role="presentation" data-section="USB Converter" class="<?php echo(get_post_meta($post->ID, 'series', true) == 'USB Converter' ? 'active' : 'inactive'); ?>">
                  <a href="/products/control-systems/equipment/usb-converter/">USB Converter</a>
                </li>
                <li role="presentation" data-section="Server" class="<?php echo(get_post_meta($post->ID, 'series', true) == 'Server' ? 'active' : 'inactive'); ?>">
                  <a href="/products/control-systems/equipment/server/">Server</a>
                </li>
                <li role="presentation" data-section="IPC Switch" class="<?php echo(get_post_meta($post->ID, 'series', true) == 'IPC Switch' ? 'active' : 'inactive'); ?>">
                  <a href="/products/control-systems/equipment/ipc-switch/">IPC</a>
                </li>
              </ul>
            </nav>


          </div>

        </div><!-- #container -->

      </header>
         
      <div class="lighting-content row">

        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'equipment' ); ?>
        <?php endwhile; // end of the loop. ?>

      </div>

	  </main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer("control-systems"); ?>

