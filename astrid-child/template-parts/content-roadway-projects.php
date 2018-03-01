
<?php
/**
 * Template part for displaying page content in page_bay_projects.php.
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
  
  <div id="roadway-series" class="under-fixed-nav">
    <ul class="horiz-card-list">

      <li id="round-rock-air-alert" class="card">
        <div class="row">
          <div class="card-media col-xs-5 col-sm-3 col-md-3">
            <iframe width="190" src="https://www.youtube.com/embed/ezg-H4qHPhQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="small-label col-xs-6 col-sm-3 col-md-3 text-center non-mobile">
            <span class="case-study exists">
              <a href="/round-rock-smart-led/">
                <i class="fa fa-area-chart fa-2x" aria-hidden="true"></i>
                <i class="fa fa-search-plus" aria-hidden="true"></i><br>
                <span style="font-size:0.7em;"">Case Study</span>
              </a>
            </span>
          </div>
          <div class="card-stacked col-xs-12 col-sm-6 col-md-6">
            <span class="installation-site">Smart LED City</span>
            <span class="location">
              <a href="https://goo.gl/maps/XispNsTD6e82">Round Rock, TX, USA</a>
            </span>
          </div>
        </div>
      </li>

      <li id="lekas-hwy" class="card">
        <div class="row">
          <div class="card-media col-xs-5 col-sm-3 col-md-3">
            <iframe width="190" src="https://www.youtube.com/embed/n7_RGtDZfl4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="small-label col-xs-6 col-sm-3 col-md-3 text-center non-mobile">
            <span class="case-study exists">
              <a href="/lekas-highway/">
                <i class="fa fa-area-chart fa-2x" aria-hidden="true"></i>
                <i class="fa fa-search-plus" aria-hidden="true"></i><br>
                <span style="font-size:0.7em;"">Case Study</span>
              </a>
            </span>
          </div>
          <div class="card-stacked col-xs-12 col-sm-6 col-md-6">
            <span class="installation-site">Malaysia LEKAS Highway</span>
            <span class="location">
              <a href="https://goo.gl/maps/XnyjWbLFvQA2">Kuala Lumpur, Malaysia</a>
            </span>
          </div>
        </div>
      </li>
      
      <li id="gyeongju-roadway" class="card">
        <div class="row">
          <div class="card-media col-xs-5 col-sm-3 col-md-3">
            <iframe width="190" src="https://www.youtube.com/embed/y-4qjE7cAIA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="small-label col-xs-6 col-sm-3 col-md-3 text-center non-mobile">
            <span class="case-study exists">
              <a href="/gyeongju-roadway-lighting/">
                <i class="fa fa-area-chart fa-2x" aria-hidden="true"></i>
                <i class="fa fa-search-plus" aria-hidden="true"></i><br>
                <span style="font-size:0.7em;"">Case Study</span>
              </a>
            </span>
          </div>
          <div class="card-stacked col-xs-12 col-sm-6 col-md-6">
            <span class="installation-site">Gyeongju Roadway</span>
            <span class="location">
              <a href="https://goo.gl/maps/K2PEoXiXShQ2">Gyeongju, Korea</a>
            </span>
          </div>
        </div>
      </li>


      <?php the_content(); ?>
    </ul>
  </div> 
</div><!-- .entry-content -->