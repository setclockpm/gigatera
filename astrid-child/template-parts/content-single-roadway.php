<?php
/**
 * Template part for displaying page content in page_roadway_single.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astrid
 */

?>

<div id="roadway-series" class="col-xs-12 hentry under-fixed-nav">
  <article id="post-<?php the_ID(); ?>" <?php post_class("product-detail"); ?>>
    <header class="entry-header">

	  <?php if (count(get_post_custom_values('variant')) > 0) : ?>
	    <div class="product-tab">
          <ul class="clearfix">
            <li class="<?php echo(get_post_meta($post->ID, 'series', true) == 'maha' ? 'active' : 'inactive'); ?>">
              <a href="/products/lighting/bay/maha">MAHA</a>
            </li>
            <li class="<?php echo(get_post_meta($post->ID, 'series', true) == 'maha-neo' ? 'active' : 'inactive'); ?>">
              <a href="/products/lighting/bay/maha-neo">MAHA-NEO</a>
            </li>
          </ul>
        </div>
      <?php endif; ?>
      <h2 class="tagline text-center"><?php echo(get_post_meta($post->ID, 'tagline', true)); ?></h2>

	</header><!-- .entry-header -->

	
    
  

    <div class="product-images-container row">
	    <div class="col-xs-12 col-md-6">
	      <img src="<?php echo get_post_meta($post->ID, 'photo-url', true); ?>">
	    </div>
	    <div class="col-xs-12 col-md-6 desc">
        <ul>
          <li><?php echo(get_post_meta($post->ID, 'highlight1', true)); ?></li>
          <li><?php echo(get_post_meta($post->ID, 'highlight2', true)); ?></li>
          <li><?php echo(get_post_meta($post->ID, 'highlight3', true)); ?></li>
          <?php if (count(get_post_custom_values('highlight4')) > 0) : ?>
            <li><?php echo(get_post_meta($post->ID, 'highlight4', true)); ?></li>
          <?php endif; ?> 
          <?php if (count(get_post_custom_values('highlight5')) > 0) : ?>
            <li><?php echo(get_post_meta($post->ID, 'highlight5', true)); ?></li>
          <?php endif; ?> 
        </ul>
      </div>
	  </div>

	  <div class="entry-content">
      <section class="applications">
      	<span class="head"><h3>Typical Applications</h3></span>
      	<?php echo(get_post_meta($post->ID, 'Application', true)); ?>
      </section>
      <section class="certifications">
      	<span class="head"><h3>Certifications</h3></span>
      	 <?php echo(get_post_meta($post->ID, 'Certifications', true)); ?>
      </section>


	  <?php the_content(); ?>

 
      <table class="specs" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr class="specs-top">
            <td class="tolerance" colspan="9">
              <p>* Tolerance : ±5%</p>
            </td>
          </tr>

          <tr class="column-names">
            <td width="9%" data-width="9.4%">
              <p class="text-center">Model</p>
            </td>
            <td width="8%" data-width="8.62%">
              <p class="text-center">Power</p>
            </td>
            <td width="11%" data-width="11.74%">
              <p class="text-center">*Luminous Efficacy</p>
            </td>
            <td width="10%" data-width="10.96%">
              <p class="text-center">*Luminous Flux</p>
            </td>
            <td width="13%" data-width="13.24%">
              <p class="text-center">Color (Temp)</p>
            </td>
            <td width="8%" data-width="8.8%">
              <p class="text-center">CRI</p>
            </td> 
            <td width="8%" data-width="8.78%">
              <p class="text-center">Weight</p>
            </td>
            <td width="15%" data-width="15.36%">
              <p class="text-center">Input Voltage</p>
            </td>
            <td class="rightmost" width="13%" data-width="13.1">
              <p class="text-center">Operation Temperature</p>
            </td>
          </tr>

          <tr class="specs-first">
            <td width="9%" data-width="9.4%">
              <p class="text-center">SET060</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">STL060</p>
            </td>
            <td width="8%" data-width="8.62%">
              <p class="text-center">&nbsp;</p>
              <p class="text-center">60W</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="11%" data-width="11.74%">
              <p class="text-center">&nbsp;</p>
              <p class="text-center">130W</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="10%" data-width="10.96%">
               <p class="text-center">&nbsp;</p>
              <p class="text-center">7800lm</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td class="rowspan" rowspan=3 width="13%" data-width="13.24%">
              <p class="text-center">standard:</p>
              <p class="text-center">5000K</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">options: </p>
              <p class="text-center">5700K, 4000K, 3000K</p>
            </td>
            <td class="rowspan" rowspan=3 width="8%" data-width="8.8%">
              <p class="text-center">&nbsp;</p>
              <p class="text-center">80 ra</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="8%" data-width="8.78%">
              <p class="text-center">8.2lbs</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">3.7kg</p>
            </td>
            <td class="rowspan" rowspan=3 width="15%" data-width="15.36%">
              <p class="text-center">100~240 Vac</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">100~277 Vac</p>
            </td>
            <td class="rightmost rowspan" rowspan=3 width="13%" data-width="13.1%">
              <p class="text-center">-22°F ~ 140°F</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">-30°C ~ 60°C</p>
            </td>
          </tr>

          <tr class="specs specs-last">
            <td width="9%" data-width="9.4%">
              <p class="text-center">&nbsp;</p>
              <p class="text-center">EFL130</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="8%" data-width="8.62%">
              <p class="text-center">&nbsp;</p>
              <p class="text-center">130W</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="11%" data-width="11.74%">
              <p class="text-center">*F: 140lm/W</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">*C: 150lm/W</p>
            </td>
            <td width="10%" data-width="10.96%">
              <p class="text-center">18200lm</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">19500lm</p>
            </td>
            <!-- cell -->
            <!-- cell -->
            <td width="8%" data-width="8.78%">
              <p class="text-center">10.8lbs</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">4.9kg</p>
            </td>
            <!-- cell -->
            <!-- cell -->
          </tr>

          <tr class="specs">
            <td width="9%" data-width="9.4%">
              <p class="text-center">&nbsp;</p>
              <p class="text-center">NA600</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="8%" data-width="8.62%">
              <p class="text-center">&nbsp;</p>
              <p class="text-center">600W</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <!-- cell -->
            <td width="10%" data-width="10.96%">
              <p class="text-center">&nbsp;</p>
              <p class="text-center">63000lm</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <!-- cell -->
            <!-- cell -->
            <td width="8%" data-width="8.78%">
              <p class="text-center">66.1lbs</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">30.0kg</p>
            </td>
            <td width="15%" data-width="15.36%">
              <p class="text-center">&nbsp;</p>
              <p class="text-center">347~480 Vac</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <!-- cell -->
          </tr>


          <tr class="specs specs-last">
            <td width="9%" data-width="9.4%">
              <p class="text-center">&nbsp;</p>
              <p class="text-center">SE160</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="8%" data-width="8.62%">
              <p class="text-center">&nbsp;</p>
              <p class="text-center">160W</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="11%" data-width="11.74%">
              <p class="text-center">*F: 135lm/W</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">*C: 145lm/W</p>
            </td>
            <td width="10%" data-width="10.96%">
              <p class="text-center">9800lm</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">10500lm</p>
            </td>
            <!-- cell -->
            <!-- cell -->
            <td width="8%" data-width="8.78%">
              <p class="text-center">13.2lbs</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">6.7g</p>
            </td>
            <td width="15%" data-width="15.36%">
              <p class="text-center">100~277 Vac</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">347~480 Vac</p>
            </td>
            <!-- cell -->
          </tr>

          <tr class="specs">
            <td width="9%" data-width="9.4%">
              <p class="text-center">&nbsp;</p>
              <p class="text-center">SFX800</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="8%" data-width="8.62%">
              <p class="text-center">&nbsp;</p>
              <p class="text-center">800W</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="11%" data-width="11.74%">
              <p class="text-center">105lm/W</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">110lm/W</p>
            </td>
            <td width="10%" data-width="10.96%">
              <p class="text-center">84000lm</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">88000lm</p>
            </td>
            <!-- cell -->
            <td width="8%" data-width="8.8%">
              <p class="text-center">70 ra</p>
              <p class="text-center">80 ra</p>
              <p class="text-center">90 ra</p>
            </td>
            <td width="8%" data-width="8.78%">
              <p class="text-center">70.6lbs</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">32.0kg</p>
            </td>
            <td width="15%" data-width="15.36%">
              <p class="text-center">200 ~ 227 Vac</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">347 ~ 480 Vac</p>
            </td>
            <td class="rightmost" width="13%" data-width="13.1%">
              <p class="text-center">-22°F ~ 131°F</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">-30°C ~ 55°C</p>
            </td>
          </tr>
          <tr class="specs">
            <td width="9%" data-width="9.4%">
              <p class="text-center">WP075</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="8%" data-width="8.62%">
              <p class="text-center">75W</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="10%" data-width="10.96%">
              <p class="text-center">10125lm</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="8%" data-width="8.78%">
              <p class="text-center">9.3lbs</p>
              <p class="text-center">4.2kg</p>
              <p class="text-center">&nbsp;</p>
            </td>
          </tr>
          <tr class="specs specs-last">
            <td width="9%" data-width="9.4%">
              <p class="text-center">&nbsp;</p>
              <p class="text-center">SFX1K0</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="8%" data-width="8.62%">
              <p class="text-center">&nbsp;</p>
              <p class="text-center">1000W</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="11%" data-width="11.74%">
              <p class="text-center">140lm/W</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">150lm/W</p>
            </td>
            <td width="10%" data-width="10.96%">
              <p class="text-center">105,000lm</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">110,000lm</p>
            </td>
            <!-- cell -->
            <td width="8%" data-width="8.8%">
              <p class="text-center">80 ra</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">70 ra</p>
            </td>
            <td width="8%" data-width="8.78%">
              <p class="text-center">70.6lbs</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">32.0kg</p>
            </td>
            <td width="15%" data-width="15.36%">
              <p class="text-center">200 ~ 227 Vac</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">347 ~ 480 Vac</p>
            </td>
            <td class="rightmost" width="13%" data-width="13.1%">
              <p class="text-center">-22°F ~ 131°F</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">-30°C ~ 55°C</p>
            </td>
          </tr>
          <tr class="bottom-specs first">
            <td width="40%" colspan="5" style="font-style: italic;">
              <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
                * C : Clear Cover&nbsp;&nbsp;* F : Frosted Cover
              </p>
            </td>
            <td colspan="5" width="59%"></td>
          </tr>
          <tr class="bottom-specs first">
            <td width="53%" colspan="5">
              <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
                ■ Body : Cast Aluminum
              </p>
            </td>
            <td width="46%" colspan="4">
              <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
                ■ Mounting Option : Ceiling Bracket (Pipe and Chain)
              </p>
            </td>
          </tr>
          <tr class="bottom-specs">
            <td width="53%" colspan="5">
              <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
                ■ Cover: Glass or Polycarbonate (Diffuser)
              </p>
            </td>
            <td width="46%" colspan="4">
              <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
                ■ Light Distribution : 120º
              </p>
            </td>
          </tr>
          <tr class="bottom-specs">
            <td width="53%" colspan="5">
              <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
                ■ Finish : Anodized
              </p>
            </td>
            <td width="46%" colspan="4">
              <p style="margin: 0cm 0cm 0pt; text-align: justify">
                ■ Control System : Wired (1-10V)
              </p>
            </td>
          </tr>
        </tbody>
      </table>
	

    </div><!-- .entry-content -->
  </article><!-- #post-## -->
</div>


