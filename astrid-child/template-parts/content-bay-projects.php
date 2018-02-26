
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
  
  <div id="bay-series" class="under-fixed-nav">
    <ul class="horiz-card-list">

      <li id="blazer-training" class="card">
        <div class="row">
          <div class="card-media col-xs-5 col-sm-3 col-md-3">
            <iframe width="190" src="https://www.youtube.com/embed/Ku82tfmut4o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="small-label col-xs-6 col-sm-3 col-md-3 text-center non-mobile">
            <span class="case-study exists">
              <a href="/trail-blazers-training/">
                <i class="fa fa-area-chart fa-2x" aria-hidden="true"></i>
                <i class="fa fa-search-plus" aria-hidden="true"></i><br>
                <span style="font-size:0.7em;"">Case Study</span>
              </a>
            </span>
          </div>
          <div class="card-stacked col-xs-12 col-sm-6 col-md-6">
            <span class="installation-site">Blazer Training Facility</span>
            <span class="location">
              <a href="https://goo.gl/maps/f5hSkf6k1gu">Portland, OR, USA</a>
            </span>
          </div>
        </div>
      </li>

      <li id="leicester-riders" class="card">
        <div class="row">
          <div class="card-media col-xs-5 col-sm-3 col-md-3">
            <iframe width="190" src="https://www.youtube.com/embed/n7_RGtDZfl4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="small-label col-xs-6 col-sm-3 col-md-3 text-center non-mobile">
            <span class="case-study exists">
              <a href="https://gigaterausa.com/leicester-arena/">
                <i class="fa fa-area-chart fa-2x" aria-hidden="true"></i>
                <i class="fa fa-search-plus" aria-hidden="true"></i><br>
                <span style="font-size:0.7em;"">Case Study</span>
              </a>
            </span>
          </div>
          <div class="card-stacked col-xs-12 col-sm-6 col-md-6">
            <span class="installation-site">Leicester Arena</span>
            <span class="location">
              <a href="https://goo.gl/maps/twUjuHCsw662">Leicester, United Kingdom</a>
            </span>
          </div>
        </div>
      </li>
      <li id="kowepo-tennis" class="card">
        <div class="row">
          <div class="card-media col-xs-5 col-sm-3 col-md-3">
            <iframe width="190" src="https://www.youtube.com/embed/U-mLAx2Okzs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="small-label col-xs-6 col-sm-3 col-md-3 text-center non-mobile">
            <span class="case-study exists">
              <a href="/case-studies/bay/kowepo-tennis-courts/">
                <i class="fa fa-area-chart fa-2x" aria-hidden="true"></i>
                <i class="fa fa-search-plus" aria-hidden="true"></i><br>
                <span style="font-size:0.7em;"">Case Study</span>
              </a>
            </span>
          </div>
          <div class="card-stacked col-xs-12 col-sm-6 col-md-6">
            <span class="installation-site">KOWEPO Tennis Center</span>
            <span class="location">
              <a href="https://goo.gl/maps/bhk57zkSqz52">Gunsan, South Korea</a>
            </span>
          </div>
        </div>
      </li>
      


      <?php the_content(); ?>
    </ul>
  </div> 
</div><!-- .entry-content -->



   

<!--

      

  <div id="factory-system" class="col-xs-12 card">
      <div class="card-block">
        <div class="thumbnail top">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/-b041BkludQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="horizontal-divider">
          <img src="https://gigaterausa.com/wp-content/uploads/2018/01/divider.png">
        </div>
        <div class="card-text bottom">
          <h3 class="title">Professional Lighting System</h3>
          <p class="description">
            SEGA130W, EFL130W, UKR LED Light (Partner), Factory Installation, Ukraine
          </p>
        </div>
      </div>
      <img class="card-img-bottom" src="https://gigaterausa.com/wp-content/uploads/2018/01/giga-divider.jpg" alt="Card Bottom Border">
    </div>
  </div>



  <div class="middle col-md-4 col-xs-12">

    <div id="multipurpose-venue" class="col-xs-12 card">
      <div class="card-block">
        <div class="thumbnail top">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/V6M8MPsMJxk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="horizontal-divider">
          <img src="https://gigaterausa.com/wp-content/uploads/2018/01/divider.png">
        </div>
        <div class="card-text bottom">
          <h3 class="title">Taean Multipurpose Venue</h3>
          <p class="description">
            SEGA150W, SEGA100W, Taean Multipurpose Venue Reference Video, Korea
          </p>
        </div>
      </div>
      <img class="card-img-bottom" src="https://gigaterausa.com/wp-content/uploads/2018/01/giga-divider.jpg" alt="Card Bottom Border">
    </div>

     <div id="presidential-hangar" class="col-xs-12 card case-study">
      <div class="card-block">
        <div class="thumbnail-top">
          <a class="thumbnail" href="/applications/bay-lighting/presidential-hangar">
            <img src="https://gigaterausa.com/wp-content/uploads/2018/01/presidential-hangar-cst.png">
          </a>
          <h3 class="title">Presidential Flight Hangar</h3>
        </div>
        <div class="horizontal-divider">
          <hr class="card-divider">
        </div>
        <div class="card-text bottom">
          <p class="description">
            Light Source: SEGA-H 500 <br>  
            Aircraft Hangar <br>
          </p>
        </div>
        <div class="btn-container">
          <a class="button case-study" href="/applications/bay-lighting/presidential-hangar">
            Case Study >>
          </a>
        </div>
      </div>
      <img class="card-img-bottom" src="https://gigaterausa.com/wp-content/uploads/2018/01/giga-divider.jpg" alt="Card Bottom Border">
    </div>

    
  </div>

  <div id="kowepo-tennis" class="col-xs-12 card case-study">
      <div class="card-block">
        <div class="thumbnail-top">
          <a class="thumbnail" href="/applications/sports-flood-lighting/kowepo-tennis">
            <img src="https://gigaterausa.com/wp-content/uploads/2018/01/kowepo-tennis-cst.png" alt="Evendale Golf Resort Overhead" />
          </a>
          
          <h3 class="title">KOWEPO Tennis Center</h3>
        </div>
        <div class="horizontal-divider">
          <hr class="card-divider">
        </div>
        <div class="card-text bottom">
          <p class="description">
            Light Source: IBL 500 <br>  
            Indoor Tennis Courts<br>
          </p>
        </div>
        <div class="btn-container">
          <a class="button case-study" href="/applications/sports-flood-lighting/kowepo-tennis">
            Case Study >>
          </a>
        </div>
      </div>
      <img class="card-img-bottom" src="https://gigaterausa.com/wp-content/uploads/2018/01/giga-divider.jpg" alt="Card Bottom Border">
    </div>


  <div class="right col-md-4 col-xs-12">

    <div id="middle-school-gym" class="col-xs-12 card">
      <div class="card-block">
        <div class="thumbnail top">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/B-FEcVcMQqE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
       </div>
       <div class="horizontal-divider">
         <img src="https://gigaterausa.com/wp-content/uploads/2018/01/divider.png">
       </div>
       <div class="card-text bottom">
       <h3 class="title">Middle School Gym</h3>
         <p class="description">
           SEGA 150W, Middle School Gym Installation Reference Video, Korea
         </p>
        </div>
      </div>
      <img class="card-img-bottom" src="https://gigaterausa.com/wp-content/uploads/2018/01/giga-divider.jpg" alt="Card Bottom Border">
    </div>
</div> -->
