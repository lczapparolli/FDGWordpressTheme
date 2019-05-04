<?php
/**
 * @package louis
 */
?>
<div class="col-1-3">
  <div class="wrap-col">

    <div <?php post_class('blogpost'); ?>>
      <div class="blogimage">
        <a href="<?php the_permalink(); ?>" class="blogimagelink">
          <?php
          if (has_post_thumbnail()) {
            the_post_thumbnail('louis-blog-thumb', array('class' => ''));
          } else { ?>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/default.gif" alt="<?php the_title_attribute(); ?>" />
          <?php } ?><i class="fa fa-chevron-right"></i></a>
      </div><!-- Blogimage -->

      <h3 class="blogposttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <div class="blogposttext"><?php the_excerpt(); ?></div>
      <p class="blogpostmeta"><i class="fa fa-calendar"></i> <a href="<?php the_permalink(); ?>"><?php the_time(get_option('date_format')); ?></a></p>
    </div><!-- Blogpost -->


  </div><!-- end wrap-col -->
</div><!-- end col-1-3 -->