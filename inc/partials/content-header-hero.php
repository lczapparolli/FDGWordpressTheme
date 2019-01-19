<?php
/**
 * The template part for displaying a hero banner on the front page.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package louis
 */
$louis_display_hero_button1 = esc_attr( get_theme_mod( 'louis_hero_button1_show', 'yes' ) );
$louis_display_hero_button2 = esc_attr( get_theme_mod( 'louis_hero_button2_show', 'yes' ) );

	?>

	<h1><?php echo esc_html( get_theme_mod( 'louis_hero_title' ) ); ?></h1>

	<?php

	echo '<p class="herotext">' . esc_html( get_theme_mod( 'louis_hero_text' ) ) . '</p>';

	echo '<div class="herobuttons">';

	if ( $louis_display_hero_button1 === 'yes' ) {
		echo '<a href="' . esc_url( get_theme_mod( 'louis_hero_button1_link', '#' ) ) . '" class="button blue large">' . esc_html( get_theme_mod( 'louis_hero_button1_text' ) ) . '</a>';
	}
	if ( $louis_display_hero_button2 === 'yes' ) {
		echo '<a href="' . esc_url( get_theme_mod( 'louis_hero_button2_link', '#' ) ) . '" class="button seethrough large">' . esc_html( get_theme_mod( 'louis_hero_button2_text' ) ) . '</a>';
	}
echo '</div>';
	?>

<div class="postcontentmeta">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    <i class="fa fa-home"></i>
    <?php esc_html_e( 'Início', 'louis' ); ?>
  </a>
  <a href="<?php echo get_page_link_by_slug( 'about' ); ?>" rel="">
    <i class="fa fa-info-circle"></i>
    <?php esc_html_e( 'Sobre', 'louis' ); ?>
  </a>
  <a href="<?php echo get_page_link_by_slug( 'como-assinar-o-feed' ); ?>" rel="">
    <i class="fa fa-rss"></i>
    <?php esc_html_e( 'Como assinar o feed', 'louis' ); ?>
  </a>
</div>