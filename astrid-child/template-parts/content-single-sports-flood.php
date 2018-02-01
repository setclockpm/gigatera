<?php
/**
 * Template part for displaying page content in page_sports_flood_single.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astrid
 */

?>

<div id="sports-flood-series" class="col-xs-12 hentry under-fixed-nav">
  <article id="post-<?php the_ID(); ?>" <?php post_class("product-detail"); ?>>
    <header class="entry-header">

	  <?php if (count(get_post_custom_values('variant')) > 0) : ?>
	    <div class="product-tab">
        <ul class="clearfix">
          <?php if (get_post_custom_values('series') == 'sufa-x') : ?>
            <li class="<?php echo(get_post_meta($post->ID, 'model', true) == 'SFX200' ? 'active' : 'inactive'); ?>">
              <a href="/products/lighting/sports-flood/sfx200">SFX200</a>
            </li>
            <li class="<?php echo(get_post_meta($post->ID, 'model', true) == 'SFX400/500/600' ? 'active' : 'inactive'); ?>">
              <a href="/products/lighting/sports-flood/sfx800">SFX800</a>
            </li>
              <a href="/products/lighting/sports-flood/sufa-x">SFX400/500/600</a>
            </li>
            <li class="<?php echo(get_post_meta($post->ID, 'model', true) == 'SFX800' ? 'active' : 'inactive'); ?>">
              <a href="/products/lighting/sports-flood/sfx800">SFX800</a>
            </li>
            <li class="<?php echo(get_post_meta($post->ID, 'model', true) == 'SFX1K0' ? 'active' : 'inactive'); ?>">
              <a href="/products/lighting/sports-flood/sfx800">SFX1K0</a>
            </li>
          <?php else : ?>
            <li class="<?php echo(get_post_meta($post->ID, 'series', true) == 'maha' ? 'active' : 'inactive'); ?>">
              <a href="/products/lighting/sports-flood/maha">MAHA</a>
            </li>
            <li class="<?php echo(get_post_meta($post->ID, 'series', true) == 'maha-neo' ? 'active' : 'inactive'); ?>">
              <a href="/products/lighting/sports-flood/maha-neo">MAHA-NEO</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    <?php endif; ?>
    <h2 class="tagline text-center"><?php echo(get_post_meta($post->ID, 'tagline', true)); ?></h2>

	</header><!-- .entry-header -->

	
  <div class="product-images-container row">
    <div class="col-xs-12 col-md-6">
      <img src="https://gigaterausa.com/wp-content/uploads/2018/01/<?php echo get_post_meta($post->ID, 'series', true); ?>-1.png">
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
      <?php if (get_post_custom_values('Certifications')) : ?>
        <section class="certifications">
          <span class="head"><h3>Certifications</h3></span>
           <?php echo(get_post_meta($post->ID, 'Certifications', true)); ?>
        </section>
      <?php endif; ?>   
   
   	  <?php the_content(); ?>


	 <!--  <table class="specs" border="0" cellspacing="0" cellpadding="0">
	    <tbody>
        <tr class="specs-top">
          <td class="tolerance" colspan="9">
            <p>
            	<span>* Tolerance : ±5%</span>
            </p>
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
            <p class="text-center">SFM400</p>
            <p class="text-center">&nbsp;</p>
            <p class="text-center">&nbsp;</p>
          </td>
          <td width="8%" data-width="8.62%">
            <p class="text-center">400W</p>
            <p class="text-center">&nbsp;</p>
            <p class="text-center">&nbsp;</p>
          </td>
          <td width="11%" data-width="11.74%">
            <p class="text-center">100lm/W</p>
            <p class="text-center">105lm/W</p>
            <p class="text-center">110lm/W</p>
          </td>
          <td width="10%" data-width="10.96%">
            <p class="text-center">40000lm</p>
            <p class="text-center">42000lm</p>
            <p class="text-center">44000lm</p>
          </td>
          <td class="rowspan" rowspan=3 width="13%" data-width="13.24%">
            <p class="text-center">5000K</p>
            <p class="text-center">optional: </p>
            <p class="text-center">5700K / 4000K / 3000K </p>
          </td>
          <td width="8%" data-width="8.8%">
            <p class="text-center">90 ra</p>
            <p class="text-center">80 ra</p>
            <p class="text-center">70 ra</p>
          </td>
          <td width="8%" data-width="8.78%">
            <p class="text-center">17.6lbs</p>
            <p class="text-center">8.0kg</p>
            <p class="text-center">&nbsp;</p>
          </td>
          <td class="rowspan" rowspan=3 width="15%" data-width="15.36%">
            <p class="text-center">200 ~ 277 Vac</p>
            <p class="text-center">&nbsp;</p>
            <p class="text-center">347 ~ 480 Vac</p>
          </td>
          <td class="rowspan rightmost" rowspan=3 width="13%" data-width="13.1%">
            <p class="text-center">-22°F ~ 131°F</p>
            <p class="text-center">-30°C ~ 55°C</p>
            <p class="text-center">&nbsp;</p>
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
            <p class="text-center">SFM1K2</p>
            <p class="text-center">&nbsp;</p>
            <p class="text-center">&nbsp;</p>
          </td>
          <td width="8%" data-width="8.62%">
            <p class="text-center">1200W</p>
            <p class="text-center">&nbsp;</p>
            <p class="text-center">&nbsp;</p>
          </td>
           <td width="11%" data-width="11.74%">
            <p class="text-center">100lm/W</p>
            <p class="text-center">105lm/W</p>
            <p class="text-center">110lm/W</p>
          </td>
          <td width="10%" data-width="10.96%">
            <p class="text-center">120,000lm</p>
            <p class="text-center">126,000lm</p>
            <p class="text-center">132,000lm</p>
          </td>
          <td width="8%" data-width="8.8%">
            <p class="text-center">90 ra</p>
            <p class="text-center">80 ra</p>
            <p class="text-center">70 ra</p>
          </td>
          <td width="8%" data-width="8.78%">
            <p class="text-center">46.3lbs</p>
            <p class="text-center">21.0kg</p>
            <p class="text-center">&nbsp;</p>
          </td>
        </tr>
        <tr style="height: 12.75pt">
          <td width="53%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 53.96%; height: 12.75ptline-height: 1; background-color: transparent" colspan="5">
            <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
              ■< Body : Cast Aluminum
            </p>
          </td>
          <td width="46%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 46.04%; height: 12.75ptline-height: 1; background-color: transparent" colspan="4">
            <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
              ■ Light Distribution : 15º / 30º / 45º
            </p>
          </td>
        </tr>
        <tr style="height: 12.75pt">
          <td width="53%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 53.96%; height: 12.75ptline-height: 1; background-color: transparent" colspan="5">
            <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
              ■ Cover : Tempered Glass 3.2T(Clear)
            </p>
          </td>
          <td width="46%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 46.04%; height: 12.75ptline-height: 1; background-color: transparent" colspan="4">
            <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
              ■ Control System : Wired (RS-485)
            </p>
          </td>
        </tr>
        <tr style="height: 12.75pt">
          <td width="53%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 53.96%; height: 12.75ptline-height: 1; background-color: transparent" colspan="5">
            <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
              ■ Finish : Powder Coating
            </p>
          </td>
          <td width="46%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 46.04%; height: 12.75ptbackground-color: transparent" colspan="4">
            <p style="margin: 0cm 0cm 0pt; text-align: justify"></p>
          </td>
        </tr>
      </tbody>
    </table> -->

	</div><!-- .entry-content -->






  </article><!-- #post-## -->

</div>

