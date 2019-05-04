<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if (get_theme_mod( 'header_text', true )) { ?>
  <header class="clearfix">
    <div class="wrapper">
      <div id="site-branding">
        <?php the_custom_logo(); ?>
        <?php if ( function_exists( 'jetpack_the_site_logo' ) && has_site_logo() ) : ?>
        <?php jetpack_the_site_logo(); ?>
        <?php endif; ?>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
          </a></h1>
        <h2 class="site-description">
          <?php bloginfo( 'description' ); ?>
        </h2>
      </div>
    </div>
    <!-- End Wrapper --> 
  </header>
<?php } ?>