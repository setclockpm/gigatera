<?php
/**
 * Template part for displaying page content in page_facade_projects.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astrid
 */

?>


<header class="entry-header">
  <h3 id="main-title" itemprop="headline" class="tagline applications-tagline">
    <?php echo(get_post_meta($post->ID, 'headline', true)); ?>
  </h3>
</header><!-- .entry-header -->
 

<div class="entry-content">
  <div class="intro">
    <p><?php echo(get_post_meta($post->ID, 'headline-blurb', true)); ?></p>
  </div>
  
  <div id="sports-flood-series" class="under-fixed-nav">
    <ul class="horiz-card-list">

      <li id="incheon-bridge" class="card">
        <div class="row">
          <div class="card-media col-xs-5 col-sm-3 col-md-3">
            <iframe width="190" src="https://www.youtube.com/embed/alSb2pdkXbI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="small-label col-xs-6 col-sm-3 col-md-3 text-center non-mobile">
            <span class="case-study exists">
              <a href="/incheon-bridge-facade/">
                <i class="fa fa-area-chart fa-2x" aria-hidden="true"></i>
                <i class="fa fa-search-plus" aria-hidden="true"></i><br>
                <span style="font-size:0.7em;"">Case Study</span>
              </a>
            </span>
          </div>
          <div class="card-stacked col-xs-12 col-sm-6 col-md-6">
            <span class="installation-site">Incheon Bridge Facade</span>
            <span class="location">
              <a href="https://goo.gl/maps/aKzAeU6py7s">Incheon, South Korea</a>
            </span>
          </div>
        </div>
      </li>

      

      <?php the_content(); ?>
    </ul>
  </div> 
</div><!-- .entry-content -->



<!-- 


<iframe width="560" height="315" src="https://www.youtube.com/embed/JcNBSjHZ0B0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

 -->
