<?php

/*

Template Name: Sitemap

*/
	get_header();
?>

</div><!-- #container -->

<div class="fullwidth no-container">
  <main id="main" class="site-main" role="main">

    <header id="sitemap-landscape" class="subsection-showcase">

    <?php if (has_post_thumbnail()): ?>
      <div class="cover-no-repeat jumbotron" style="background-image:url(<?php the_post_thumbnail_url( "full" ) ?>);">
    <?php else: ?>
      <div class="cover-no-repeat jumbotron jumbotron-default">
    <?php endif ?>
        <div class="subsection-heading mobile text-center">
          <?php the_title( '<h1 id="sitemap" class="infopage-title sitemap">', '</h1>' ); ?>
        </div>

        <div class="subsection-heading non-mobile text-center flex-end">
          <?php the_title( '<h1 id="sitemap" class="infopage-title ">', '</h1>' ); ?>
        </div>
      </div>

    </header>


    <section class="sitemap">
      <?php echo(get_post_meta($post->ID, 'headline', true)); ?>

      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'plain' ); ?>
      <?php endwhile; // end of the loop. ?>
    </section>

   </main><!-- #main -->

<?php get_footer("minimal"); ?>






<script type="text/javascript">

  jQuery(function ($) {
    var w = $(window);
    $(window).load(function() {
      $('.site-header').addClass('has-video');
    })
  });

  jQuery(function(a) {
    var b = a('.site-header');
    a(window).scroll(function () {
      a(this).scrollTop() > 0 ? b.addClass('header-scrolled')  : b.removeClass('header-scrolled')
    })
  });
	
</script>


