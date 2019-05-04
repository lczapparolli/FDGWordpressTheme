<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php if (get_theme_mod('header_text', true)) { ?>
    <header class="clearfix">
      <div class="wrapper">
        <div id="site-branding">
          <?php the_custom_logo(); ?>
          <?php if (function_exists('jetpack_the_site_logo') && has_site_logo()) : ?>
            <?php jetpack_the_site_logo(); ?>
          <?php endif; ?>
          <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
              <?php bloginfo('name'); ?>
            </a></h1>
          <h2 class="site-description">
            <?php bloginfo('description'); ?>
          </h2>
        </div>
      </div>
      <!-- End Wrapper -->

    </header>
  <?php } ?>
  <div id="hero">
    <div class="hero-bg"><img src="<?php header_image(); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" /></div>
    <?php
    $louis_hero_overlay_enabled = esc_attr(get_theme_mod('louis_hero_overlay_enabled', 'yes'));
    $hidden = '';
    if ($louis_hero_overlay_enabled === 'no') {
      $hidden = 'hidden';
    }
    echo '<div class="hero-overlay ' . $hidden . '"></div>';
    ?>
    <div class="wrapper">
      <h1>
        <?php the_title() ?>
      </h1>
      <div class="postcontentmeta">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
          <i class="fa fa-home"></i>
          <?php esc_html_e('Início', 'louis'); ?>
        </a>
        <a href="<?php echo get_page_link_by_slug('about'); ?>" rel="">
          <i class="fa fa-info-circle"></i>
          <?php esc_html_e('Sobre', 'louis'); ?>
        </a>
        <a href="<?php echo get_page_link_by_slug('como-assinar-o-feed'); ?>" rel="">
          <i class="fa fa-rss"></i>
          <?php esc_html_e('Como assinar o feed', 'louis'); ?>
        </a>
      </div>
      <div class="herobuttons">
        <?php the_tags('', '', ''); ?>
      </div>
    </div>
    <!-- End Wrapper -->
  </div>
  <!-- End Hero -->