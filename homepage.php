<?php /* Template Name: Homepage */ ?>

<?php get_header()?>
<?php get_template_part('/template-parts/breadcrumbs')?>

<?php
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content', 'page' );

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

endwhile; // End of the loop.
?>

<?php get_template_part('/template-parts/pre','footer')?>
<?php get_footer()?>
