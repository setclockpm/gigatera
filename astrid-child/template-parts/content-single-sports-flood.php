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
  <article id="post-<?php the_ID(); ?>" <?php post_class(""); ?>>
    <header class="entry-header">

	  <?php if (count(get_post_custom_values('variant')) > 0) : ?>
	    <div class="product-tab">
          <ul class="clearfix">
            <li class="<?php echo(get_post_meta($post->ID, 'series', true) == 'maha' ? 'active' : 'inactive'); ?>">
              <a href="/products/lighting/sports-flood/maha">MAHA</a>
            </li>
            <li class="<?php echo(get_post_meta($post->ID, 'series', true) == 'maha-neo' ? 'active' : 'inactive'); ?>">
              <a href="/products/lighting/sports-flood/maha-neo">MAHA-NEO</a>
            </li>
          </ul>
        </div>
      <?php endif; ?>
      <h3 class="tagline text-center"><?php echo(get_post_meta($post->ID, 'tagline', true)); ?></h3>

	</header><!-- .entry-header -->

	
    
  

	<?php if ( has_post_thumbnail() ) : ?>
	  <div class="product-images-container row">
	  	<div class="col-xs-12 col-md-6">
	  	  <img class="alignleft" src="https://gigaterausa.com/wp-content/uploads/2018/01/<?php echo get_post_meta($post->ID, 'series', true); ?>-1.png">
	  	</div>
		<div class="col-xs-12 col-md-6 desc">
          <ul>
           	<li>Glare free from Narrow beam reflector</li>
           	<li>Flicker free proven upto 1,500 fps ultra slow-motion</li>
           	<li>High CRI &amp; R9 Content better visibility</li>
           	<li>Tilt and rotate for easy aiming</li>
           	<li>Linkage with wired control system even for event light control</li>
          </ul>
        </div>
	  </div>
  
	<?php endif; ?>	

	<div class="entry-content product-detail">
	  <?php the_content(); ?>


	  <!-- <table class="specs" border="0" cellspacing="0" cellpadding="0">
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
              <p class="text-center">Color Temperature</p>
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
            <td width="13%" data-width="13.1">
              <p class="text-center">Operation Temperature</p>
            </td>
          </tr>
<tr style="height: 2.8pt">
<td width="9%" style="border-width: 0px 0.25pt 0px 0px; border-style: none solid none none; border-color: #000000 gray rgb(0, 0, 0) rgb(0, 0, 0); padding: 0cm 5.4pt; border-image-source: none; width: 9.4%; height: 2.8pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="8%" style="border-width: 0px 0.25pt 0px 0px; border-style: none solid none none; border-color: #000000 gray rgb(0, 0, 0) rgb(0, 0, 0); padding: 0cm 5.4pt; border-image-source: none; width: 8.62%; height: 2.8pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="11%" style="border-width: 0px 0.25pt 0px 0px; border-style: none solid none none; border-color: #000000 gray rgb(0, 0, 0) rgb(0, 0, 0); padding: 0cm 5.4pt; border-image-source: none; width: 11.74%; height: 2.8pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="10%" style="border-width: 0px 0.25pt 0px 0px; border-style: none solid none none; border-color: #000000 gray rgb(0, 0, 0) rgb(0, 0, 0); padding: 0cm 5.4pt; border-image-source: none; width: 10.96%; height: 2.8pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="13%" style="border-width: 0px 0.25pt 0px 0px; border-style: none solid none none; border-color: #000000 gray rgb(0, 0, 0) rgb(0, 0, 0); padding: 0cm 5.4pt; border-image-source: none; width: 13.24%; height: 2.8pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="8%" style="border-width: 0px 0.25pt 0px 0px; border-style: none solid none none; border-color: #000000 gray rgb(0, 0, 0) rgb(0, 0, 0); padding: 0cm 5.4pt; border-image-source: none; width: 8.8%; height: 2.8pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="8%" style="border-width: 0px 0.25pt 0px 0px; border-style: none solid none none; border-color: #000000 gray rgb(0, 0, 0) rgb(0, 0, 0); padding: 0cm 5.4pt; border-image-source: none; width: 8.78%; height: 2.8pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="15%" style="border-width: 0px 0.25pt 0px 0px; border-style: none solid none none; border-color: #000000 gray rgb(0, 0, 0) rgb(0, 0, 0); padding: 0cm 5.4pt; border-image-source: none; width: 15.36%; height: 2.8pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="13%" style="padding: 0cm 5.4pt; border: 0px rgb(0, 0, 0); border-image-source: none; width: 13.1%; height: 2.8pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td></tr>
<tr style="height: 33.55pt">
<td width="9%" valign="top" style="border-width: 0px 0.25pt 0px 0px; border-style: none solid none none; border-color: #000000 gray rgb(0, 0, 0) rgb(0, 0, 0); padding: 0cm 5.4pt; border-image-source: none; width: 9.4%; height: 33.55pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">SFA800</span></p></td>
<td width="8%" valign="top" style="border-width: 0px 0.25pt 0px 0px; border-style: none solid none none; border-color: #000000 gray rgb(0, 0, 0) rgb(0, 0, 0); padding: 0cm 5.4pt; border-image-source: none; width: 8.62%; height: 33.55pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">800W</span></p></td>
<td width="11%" valign="top" style="border-width: 0px 0.25pt 0px 0px; border-style: none solid none none; border-color: #000000 gray rgb(0, 0, 0) rgb(0, 0, 0); padding: 0cm 5.4pt; border-image-source: none; width: 11.74%; height: 33.55pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">110 lm/W</span></p>
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">105 lm/W</span></p>
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">100 lm/W</span></p></td>
<td width="10%" valign="top" style="border-width: 0px 0.25pt 0px 0px; border-style: none solid none none; border-color: #000000 gray rgb(0, 0, 0) rgb(0, 0, 0); padding: 0cm 5.4pt; border-image-source: none; width: 10.96%; height: 33.55pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">88,000 lm</span></p>
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">84,000 lm</span></p>
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">80,000 lm</span></p></td>
<td width="13%" valign="top" style="border-width: 0px 0.25pt 0px 0px; border-style: none solid none none; border-color: #000000 gray rgb(0, 0, 0) rgb(0, 0, 0); padding: 0cm 5.4pt; border-image-source: none; width: 13.24%; height: 33.55pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">5000K</span></p>
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">( 5700K / 4000K / 3000K available )</span></p></td>
<td width="8%" valign="top" style="border-width: 0px 0.25pt 0px 0px; border-style: none solid none none; border-color: #000000 gray rgb(0, 0, 0) rgb(0, 0, 0); padding: 0cm 5.4pt; border-image-source: none; width: 8.8%; height: 33.55pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">70 Ra</span></p>
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">80 Ra</span></p>
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">90 Ra</span></p></td>
<td width="8%" valign="top" style="border-width: 0px 0.25pt 0px 0px; border-style: none solid none none; border-color: #000000 gray rgb(0, 0, 0) rgb(0, 0, 0); padding: 0cm 5.4pt; border-image-source: none; width: 8.78%; height: 33.55pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">39.7 lb</span></p>
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">18.0 kg</span></p></td>
<td width="15%" valign="top" style="border-width: 0px 0.25pt 0px 0px; border-style: none solid none none; border-color: #000000 gray rgb(0, 0, 0) rgb(0, 0, 0); padding: 0cm 5.4pt; border-image-source: none; width: 15.36%; height: 33.55pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">200 ~ 277 Vac</span></p>
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">220 ~ 240 Vac</span></p>
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">347 ~ 480 Vac</span></p></td>
<td width="13%" valign="top" style="padding: 0cm 5.4pt; border: 0px rgb(0, 0, 0); border-image-source: none; width: 13.1%; height: 33.55pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">-22°F ~ 131°F</span></p>
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><span style="font-family: Arial; font-size: 12px">-30°C ~ 55°C</span></p></td></tr>
<tr style="height: 3pt">
<td width="9%" valign="top" style="border-width: 0px 0.25pt 0.25pt 0px; border-style: none solid solid none; border-color: #000000 gray gray rgb(0, 0, 0); padding: 0cm 5.4pt; width: 9.4%; height: 3pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="8%" valign="top" style="border-width: 0px 0.25pt 0.25pt 0px; border-style: none solid solid none; border-color: #000000 gray gray rgb(0, 0, 0); padding: 0cm 5.4pt; width: 8.62%; height: 3pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="11%" valign="top" style="border-width: 0px 0.25pt 0.25pt 0px; border-style: none solid solid none; border-color: #000000 gray gray rgb(0, 0, 0); padding: 0cm 5.4pt; width: 11.74%; height: 3pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="10%" valign="top" style="border-width: 0px 0.25pt 0.25pt 0px; border-style: none solid solid none; border-color: #000000 gray gray rgb(0, 0, 0); padding: 0cm 5.4pt; width: 10.96%; height: 3pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="13%" valign="top" style="border-width: 0px 0.25pt 0.25pt 0px; border-style: none solid solid none; border-color: #000000 gray gray rgb(0, 0, 0); padding: 0cm 5.4pt; width: 13.24%; height: 3pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="8%" valign="top" style="border-width: 0px 0.25pt 0.25pt 0px; border-style: none solid solid none; border-color: #000000 gray gray rgb(0, 0, 0); padding: 0cm 5.4pt; width: 8.8%; height: 3pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="8%" valign="top" style="border-width: 0px 0.25pt 0.25pt 0px; border-style: none solid solid none; border-color: #000000 gray gray rgb(0, 0, 0); padding: 0cm 5.4pt; width: 8.78%; height: 3pt; line-height: 1; background-color: transparent">
<p style="margin: 0cm 0cm 0pt; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="15%" valign="top" style="border-width: 0px 0.25pt 0.25pt 0px; border-style: none solid solid none; border-color: #000000 gray gray rgb(0, 0, 0); padding: 0cm 5.4pt; width: 15.36%; height: 3pt; line-height: 1; background-color: transparent">
<p style="margin: 0cm 0cm 0pt; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="13%" valign="top" style="border-width: 0px 0px 0.25pt; border-style: none none solid; border-color: #000000 rgb(0, 0, 0) gray; padding: 0cm 5.4pt; border-image-source: none; width: 13.1%; height: 3pt; line-height: 1; background-color: transparent">
<p class="text-center" style="margin: 0cm 0cm 0pt; text-align: center; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td></tr>
<tr style="height: 12.75pt">
<td width="62%" style="padding: 0cm 5.4pt; border: 0px rgb(0, 0, 0); border-image-source: none; width: 62.76%; height: 12.75pt; line-height: 1; background-color: transparent" colspan="6">
<p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td>
<td width="37%" style="padding: 0cm 5.4pt; border: 0px rgb(0, 0, 0); border-image-source: none; width: 37.24%; height: 12.75pt; line-height: 1; background-color: transparent" colspan="3">
<p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1"><font size="3"><span style="font-family: Arial; font-size: 12px">&nbsp;</span></font></p></td></tr>
<tr style="height: 12.75pt">
<td width="53%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 53.96%; height: 12.75pt; line-height: 1; background-color: transparent" colspan="5">
<p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1"><span style="font-family: Arial; font-size: 12px">■</span><span style="font-family: Arial; font-size: 12px"> Body : Cast Aluminum</span></p></td>
<td width="46%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 46.04%; height: 12.75pt; line-height: 1; background-color: transparent" colspan="4">
<p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1"><span style="font-family: Arial; font-size: 12px">■</span><span style="font-family: Arial; font-size: 12px"> Light Distribution : 15</span><span style="font-family: Arial; font-size: 12px">º</span><span style="font-family: Arial; font-size: 12px"> / 30</span><span style="font-family: Arial; font-size: 12px">º</span><span style="font-family: Arial; font-size: 12px"> / 45</span><span style="font-family: Arial; font-size: 12px">º</span></p></td></tr>
<tr style="height: 12.75pt">
<td width="53%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 53.96%; height: 12.75pt; line-height: 1; background-color: transparent" colspan="5">
<p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1"><span style="font-family: Arial; font-size: 12px">■</span><span style="font-family: Arial; font-size: 12px"> Cover : Tempered Glass  3.2T(Clear)</span></p></td>
<td width="46%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 46.04%; height: 12.75pt; line-height: 1; background-color: transparent" colspan="4">
<p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1"><span style="font-family: Arial; font-size: 12px">■</span><span style="font-family: Arial; font-size: 12px"> Control System : Wired  (RS-485)</span></p></td></tr>
<tr style="height: 12.75pt">
<td width="53%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 53.96%; height: 12.75pt; line-height: 1; background-color: transparent" colspan="5">
<p style="margin: 0cm 0cm 0pt; text-align: justify; line-height: 1"><span style="font-family: Arial; font-size: 12px">■</span><span style="font-family: Arial; font-size: 12px"> Finish : Powder Coating</span></p></td>
<td width="46%" style="padding: 0cm 5.4pt; border: #000000; border-image-source: none; width: 46.04%; height: 12.75pt; background-color: transparent" colspan="4">
<p style="margin: 0cm 0cm 0pt; text-align: justify"><font size="3"><span style="font-size: 12px">&nbsp;</span></font></p></td></tr>
      </tbody>
    </table> -->

	</div><!-- .entry-content -->






  </article><!-- #post-## -->

</div>

