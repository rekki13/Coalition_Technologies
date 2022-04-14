<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

?>

</div>
</div>
<?php
/**

?>
<footer id="colophon" class="site-footer">
<div class="container">
<div class="wrapper">
<div class="site-info">
<a href="<?php echo esc_url( __( 'https://wordpress.org/',
'ct-custom' ) ); ?>">
<?php
printf( esc_html__( 'Proudly powered by %s', 'ct-custom' ),
	'WordPress' );
?>
</a>
<span class="sep"> | </span>
<?php
printf( esc_html__( 'Theme: %1$s by %2$s.', 'ct-custom' ),
	'ct-custom',
	'<a href="https://coalitiontechnologies.com/">Coalition Technologies</a>' );
?>
</div><!-- .site-info -->
</div>
</div>
</footer><!-- #colophon -->
<?php */?>
<?php wp_footer(); ?>

</body>
</html>
