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
  <article id="post-<?php the_ID(); ?>" <?php post_class(""); ?>>
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
      <h3 class="tagline text-center"><?php echo(get_post_meta($post->ID, 'tagline', true)); ?></h3>

	</header><!-- .entry-header -->

	
    
  

    <div class="product-images-container row">
	  <div class="col-xs-12 col-md-6">
	    <img src="https://gigaterausa.com/wp-content/uploads/2018/01/<?php echo get_post_meta($post->ID, 'series', true); ?>-1.png">
	  </div>
	  <div class="col-xs-12 col-md-6 desc">
        <ul>
          <li>Silver Reflector with 97% Reflection Ratio</li>
 	      <li>Wireless Lighting Control</li>
 	      <li>Built-in 20kV surge protection Device</li>
 	      <li>Linear Tilt Bracket</li>
          <li>High Efficiency 135 lm/W</li>
        </ul>
      </div>
	</div>

	<div class="entry-content product-detail">
	  <?php the_content(); ?>


	  <table class="specs" border="0" cellspacing="0" cellpadding="0">
	    <tbody>
          <tr class="specs-top">
            <td class="tolerance" colspan="9">
              <p><span>* Tolerance : ±5%</span></p>
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
              <p class="text-center">SE080</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="8%" data-width="8.62%">
              <p class="text-center">80W</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="11%" data-width="11.74%">
              <p class="text-center">145 lm/W</p>
              <p class="text-center">135 lm/W</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="10%" data-width="10.96%">
              <p class="text-center">11,600 lm</p>
              <p class="text-center">10,800 lm</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="13%" data-width="13.24%">
              <p class="text-center">5000K</p>
              <p class="text-center">optional: </p>
              <p class="text-center">6500K / 5700K / 4000K / 3000K </p>
            </td>
            <td width="8%" data-width="8.8%">
              <p class="text-center">80 ra</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="8%" data-width="8.78%">
              <p class="text-center">9.7 lb</p>
              <p class="text-center">4.4 kg</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td width="15%" data-width="15.36%">
              <p class="text-center">100 ~ 277 Vac</p>
              <p class="text-center">&nbsp;</p>
              <p class="text-center">&nbsp;</p>
            </td>
            <td class="rightmost" width="13%" data-width="13.1%">
              <p class="text-center">-22°F ~ 140°F</p>
              <p class="text-center">-30°C ~ 60°C</p>
              <p class="text-center">&nbsp;</p>
            </td>
          </tr>
          <tr style="height: 3pt">
<td width="9%" valign="top" style="border-width: 0px 0.25pt 0.25pt 0px; border-style: none solid solid none; border-color: #000000 gray gray rgb(0, 0, 0); padding: 0cm 5.4pt; width: 9.4%; height: 3pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></p></td>
<td width="8%" valign="top" style="border-width: 0px 0.25pt 0.25pt 0px; border-style: none solid solid none; border-color: #000000 gray gray rgb(0, 0, 0); padding: 0cm 5.4pt; width: 8.62%; height: 3pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></p></td>
<td width="11%" valign="top" style="border-width: 0px 0.25pt 0.25pt 0px; border-style: none solid solid none; border-color: #000000 gray gray rgb(0, 0, 0); padding: 0cm 5.4pt; width: 11.74%; height: 3pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></p></td>
<td width="10%" valign="top" style="border-width: 0px 0.25pt 0.25pt 0px; border-style: none solid solid none; border-color: #000000 gray gray rgb(0, 0, 0); padding: 0cm 5.4pt; width: 10.96%; height: 3pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></p></td>
<td width="13%" valign="top" style="border-width: 0px 0.25pt 0.25pt 0px; border-style: none solid solid none; border-color: #000000 gray gray rgb(0, 0, 0); padding: 0cm 5.4pt; width: 13.24%; height: 3pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></p></td>
<td width="8%" valign="top" style="border-width: 0px 0.25pt 0.25pt 0px; border-style: none solid solid none; border-color: #000000 gray gray rgb(0, 0, 0); padding: 0cm 5.4pt; width: 8.8%; height: 3pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></p></td>
<td width="8%" valign="top" style="border-width: 0px 0.25pt 0.25pt 0px; border-style: none solid solid none; border-color: #000000 gray gray rgb(0, 0, 0); padding: 0cm 5.4pt; width: 8.78%; height: 3pt; line-height: 1; background-color: transparent">
<p style="margin: 0cm 0cm 0pt; line-height: 1"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></p></td>
<td width="15%" valign="top" style="border-width: 0px 0.25pt 0.25pt 0px; border-style: none solid solid none; border-color: #000000 gray gray rgb(0, 0, 0); padding: 0cm 5.4pt; width: 15.36%; height: 3pt; line-height: 1; background-color: transparent">
<p style="margin: 0cm 0cm 0pt; line-height: 1"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></p></td>
<td width="13%" valign="top" style="border-width: 0px 0px 0.25pt; border-style: none none solid; border-color: #000000 rgb(0, 0, 0) gray; padding: 0cm 5.4pt; border-image-source: none; width: 13.1%; height: 3pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></p></td></tr>
<tr style="height: 12.75pt">
<td width="62%" style="padding: 0cm 5.4pt; border: 0px rgb(0, 0, 0); border-image-source: none; width: 62.76%; height: 12.75pt; line-height: 1; background-color: transparent" colspan="6">
<p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></p></td>
<td width="37%" style="padding: 0cm 5.4pt; border: 0px rgb(0, 0, 0); border-image-source: none; width: 37.24%; height: 12.75pt; line-height: 1; background-color: transparent" colspan="3">
<p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></p></td></tr>
          <tr style="height: 12.75pt">
            <td width="53%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 53.96%; height: 12.75pt; line-height: 1; background-color: transparent" colspan="5">
              <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
	            <span style="font-family: Arial; font-size: 12px">■ Body: Cast Aluminum</span>
              </p>
            </td>
            <td width="46%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 46.04%; height: 12.75pt; line-height: 1; background-color: transparent" colspan="4">
              <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
              	<span style="font-family: Arial; font-size: 12px">■ Light Distribution:</span>
              	<span style="font-family: Arial; font-size: 12px">SE080:80º/100º, SE100: 80º/110º, SE130/SE160: 90º/130º</span>
              </p>
            </td>
          </tr>
          <tr style="height: 12.75pt">
            <td width="53%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 53.96%; height: 12.75pt; line-height: 1;background-color: transparent" colspan="5">
              <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
                <span style="font-family: Arial; font-size: 12px">■ Cover: Tempered Glass 3.2T(Clear / Frosted)</span>
              </p>
            </td>
            <td width="46%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 46.04%; height: 12.75pt; line-height: 1; background-color: transparent" colspan="4">
              <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
              	<span style="font-family: Arial; font-size: 12px">■ Control System:</span>
              </p>
              <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
              	<span style="font-family: Arial; font-size: 12px">Wireless (ZigBee) / Wired (1-10V)</span>
              </p>
              <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
              	<span style="font-family: Arial; font-size: 12px">Sensor(ZigBee + Occupancy + Daylight)</span>
              </p>              
            </td>
          </tr>
          <tr style="height: 12.75pt">
            <td width="53%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 53.96%; height: 12.75pt;   line-height: 1; background-color: transparent" colspan="5">
              <p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1">
                <span style="font-family: Arial; font-size: 12px">■ Finish: Powder Coating</span>
              </p>
            </td>
            <td width="46%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 46.04%; height: 12.75pt;   background-color: transparent" colspan="4">
              <p style="margin: 0cm 0cm 0pt; text-align: justify">■ Mounting Option: Ceiling Bracket (Pipe, Chain)</p>
            </td>
          </tr>
        </tbody>
      </table>

    </div><!-- .entry-content -->
  </article><!-- #post-## -->
</div>


