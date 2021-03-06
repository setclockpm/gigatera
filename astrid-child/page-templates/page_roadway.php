<?php

/*

Template Name: Roadway Lighting

*/
  get_header();
?>

</div><!-- #container -->

<div id="primary" class="lighting">

<?php if (has_post_thumbnail()): ?>
  <div class="lighting-title-container non-mobile" style="background-image: url(<?php the_post_thumbnail_url( "full" ) ?>);">
<?php else: ?>
  <div class="lighting-title-container non-mobile lighting-main-background">
<?php endif ?>
  </div>

<?php if (has_post_thumbnail()): ?>
  <div class="lighting-title-container mobile" style="background-image: url(<?php the_post_thumbnail_url( "full" ) ?>);">
<?php else: ?>
  <div class="lighting-title-container mobile lighting-main-background">
<?php endif ?>
    <div class="subsection-heading mobile text-center">
      <?php the_title( '<h1 id="lighting-entry-title" class="entry-title product-title">', '</h1>' ); ?>
    </div>
  </div>


  <div id="lighting-container" class="<?php echo 'container'; ?>">
    <main id="main" class="site-main" role="main">
      <header id="lighting-subsection-bar" class="navbar navbar-fixed-top subsection-bar row">

        <div class="<?php echo 'container vertically-centered'; ?>">
          <div class="subsection-heading non-mobile text-center col-sm-4">
            <h2 id="lighting-entry-title" class="entry-title product-title">Lighting</h2>
          </div>

          <div id="lighting-nav-container" class="col-sm-8">
            <nav id="lighting-nav" class="section-nav">
              <ul class="nav nav-pills">
                <li role="presentation" class="active" data-section="Sports / Flood">
                  <a href="/products/lighting/sports-flood">
                    Sports<br><span class="small">Flood</span>
                  </a>
                </li>
                <li role="presentation" class="active" data-section="Area Flood">
                  <a href="/products/lighting/area-flood">
                    Area<br><span class="small">Flood</span>
                  </a>
                </li>
                <li role="presentation" data-section="Bay">
                  <a href="/products/lighting/bay">Bay</a>
                </li>
                <li role="presentation" class="active" data-section="Roadway">
                  <a href="/products/lighting/roadway">Roadway</a>
                </li>
                <li role="presentation" data-section="Facade">
                  <a href="/products/lighting/facade">Facade</a>
                </li>
              </ul>
            </nav>
          </div>
        </div><!-- #container -->

      </header>

      <div class="lighting-content row">

        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'roadway' ); ?>
        <?php endwhile; // end of the loop. ?>

      </div>

    </main><!-- #main -->
  </div><!-- #lighting-container -->




  <script type="text/javascript">
    jQuery(document).ready(function($){

      console.log("loaded!");

      $('.lighting-menu-container > ul.nav li a').click(function(e) {
          var clickedLink = $(this);
          clickedLink.parent().siblings().removeClass('active').end().addClass('active');
          clickedLink.parent().data("section");
          console.log(clickedLink.parent().data("section"));
          $("h1#lighting-entry-title").text(clickedLink.parent().data("section"));
          // e.preventDefault();
      });
    });

  </script>

<?php get_footer("lighting"); ?>

