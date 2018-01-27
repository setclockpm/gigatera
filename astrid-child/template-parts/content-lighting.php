<article id="post-<?php the_ID(); ?>" <?php post_class("col-md-12 under-fixed-nav"); ?>>
  

  <div class="entry-content">
    <?php the_content(); ?>

    <?php if ( has_post_thumbnail() ) : ?>
      <div class="single-thumb">
        
      </div>
    <?php endif; ?> 

  </div><!-- .entry-content -->

</article><!-- #post-## -->