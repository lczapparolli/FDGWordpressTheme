<?php
/**
 * The single post template file.
 *
 * @package louis
 */

get_header('inside');
?>
<div class="insideposts">

<div class="wrapper">
<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'inc/partials/content', 'single' );
				endwhile;
			?>
            

			<?php /* ***Comentado para remover o sidebar***  get_sidebar(); ?><?php the_post_navigation(); */?>
</div>

<?php get_footer();