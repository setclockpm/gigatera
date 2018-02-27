
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
      
      


      <?php the_content(); ?>
    </ul>
  </div> 
</div><!-- .entry-content -->


<div id="roadway-series" class="under-fixed-nav">

  <div class="left col-md-4 col-sm-6 col-xs-12">

    <div id="lekas-hwy" class="col-xs-12 card">
      <div class="card-block">
        <div class="thumbnail top">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/HIouuIljrkQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="horizontal-divider">
          <img src="https://gigaterausa.com/wp-content/uploads/2018/01/divider.png">
        </div>
        <div class="card-text bottom">
          <h3 class="title"></h3>
          <p class="description">
            META 180W, LEKAS Highway, Malaysia
          </p>
        </div>
      </div>
      <img class="card-img-bottom" src="https://gigaterausa.com/wp-content/uploads/2018/01/giga-divider.jpg" alt="Card Bottom Border">
    </div>

    <div id="gyeongju-roadway" class="col-xs-12 card">
      <div class="card-block">
        <div class="thumbnail top">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/y-4qjE7cAIA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="horizontal-divider">
          <img src="https://gigaterausa.com/wp-content/uploads/2018/01/divider.png">
        </div>
        <div class="card-text bottom">
          <h3 class="title">Gyeongju Roadway Lighting</h3>
          <p class="description">
            SETA, Gyeongju Residential Area Street Lighting Installation, Korea
          </p>
        </div>
      </div>
      <img class="card-img-bottom" src="https://gigaterausa.com/wp-content/uploads/2018/01/giga-divider.jpg" alt="Card Bottom Border">
    </div>
    
  </div>






<!-- MIDDLE -->





  <div class="middle col-md-4 col-xs-12">

    <div id="incheon-highmast" class="col-xs-12 card">
      <div class="card-block">
        <div class="thumbnail top">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/JcNBSjHZ0B0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="horizontal-divider">
          <img src="https://gigaterausa.com/wp-content/uploads/2018/01/divider.png">
        </div>
        <div class="card-text bottom">
          <h3 class="title">Incheon Bridge Highmast</h3>
          <p class="description">
            MAHA 400W, Incheon Bridge Hightmast Pilot Installation Reference Video, Korea
          </p>
        </div>
      </div>
      <img class="card-img-bottom" src="https://gigaterausa.com/wp-content/uploads/2018/01/giga-divider.jpg" alt="Card Bottom Border">
    </div>
    
  </div>




<!-- RIGHT -->



  <div class="right col-md-4 col-xs-12">

    <div id="" class="col-xs-12 card">
      <div class="card-block">
        <div class="thumbnail top">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/ezg-H4qHPhQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
       </div>
       <div class="horizontal-divider">
         <img src="https://gigaterausa.com/wp-content/uploads/2018/01/divider.png">
       </div>
       <div class="card-text bottom">
       <h3 class="title">Round Rock Air Alert</h3>
         <p class="description">
           SET-Whistle, Air Alert System, Texas, USA
         </p>
        </div>
      </div>
      <img class="card-img-bottom" src="https://gigaterausa.com/wp-content/uploads/2018/01/giga-divider.jpg" alt="Card Bottom Border">
    </div>
  
  </div>

</div>
<!-- 
 -->