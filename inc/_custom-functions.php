<?php
require get_template_directory() . '/inc/_meta-fields.php';


function get_rekki_header() {
	get_template_part( 'inc/_custom-header' );
}

add_action( 'rekki_header', 'get_rekki_header' );


function get_rekki_sub_header() {
	get_template_part( 'template-parts/pre', 'header' );
}

add_action( 'rekki_sub_header', 'get_rekki_sub_header' );

function get_breadcrumb() {
	echo '<a href="' . home_url() . '" rel="nofollow">'.__('Home','my-textdomain').'</a>';
	if ( is_category() || is_single() ) {
		echo "&nbsp;&nbsp;&#47;&nbsp;&nbsp;";
		the_category( ' &bull; ' );
		if ( is_single() ) {
			echo " &nbsp;&nbsp;&#47;&nbsp;&nbsp; ";
			echo '<span class="current-page">';
			echo the_title();
			echo '</span>';

		}
	} elseif ( is_page() ) {
		echo "&nbsp;&nbsp;&#47;&nbsp;&nbsp;";
		echo '<span class="current-page">';
		echo the_title();
		echo '</span>';	} elseif ( is_search() ) {
		echo "&nbsp;&nbsp;&#47;&nbsp;&nbsp;Search Results for... ";
		echo '"<em>';
		echo the_search_query();
		echo '</em>"';
	}
}