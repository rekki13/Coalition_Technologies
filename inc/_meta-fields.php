<?php
function my_admin_menu() {
	add_menu_page(
		__( 'Settings page', 'settings-page' ),
		__( 'Settings page', 'settings-page' ),
		'manage_options',
		'settings-page',
		'my_admin_page_contents',
		'dashicons-schedule',
		13
	);
}

add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_page_contents() {
	?>
    <form method="POST" action="options.php">
		<?php
		settings_fields( 'settings-page' );
		do_settings_sections( 'settings-page' );
		submit_button();
		?>
    </form>
	<?php
}


add_action( 'admin_init', 'my_settings_init' );

function my_settings_init() {

	//LOGO SECTION
	add_settings_section(
		'logo_setting_section',
		__( 'Logo', 'my-textdomain' ),
		'logo_uploader_marup',
		'settings-page'
	);
	add_settings_field(
		'logo_setting_field',
		false,
		'logo_uploader_markup',
		'settings-page',
		'logo_setting_section'
	);
	register_setting( 'settings-page', 'custom_logo' );

	//CONTACTS SECTION
	add_settings_section(
		'contact_setting_section',
		__( 'Contacts', 'my-textdomain' ),
		'contacts_section_callback_function',
		'settings-page'
	);
	add_settings_field(
		'my_setting_field',
		__( 'Address Information', 'my-textdomain' ),
		'my_setting_markup',
		'settings-page',
		'contact_setting_section'
	);
	add_settings_field(
		'phone_number',
		__( 'Phone number', 'my-textdomain' ),
		'phone_number_markup',
		'settings-page',
		'contact_setting_section'
	);
	add_settings_field(
		'fax_number',
		__( 'Fax number', 'my-textdomain' ),
		'fax_number_markup',
		'settings-page',
		'contact_setting_section'
	);

	register_setting( 'settings-page', 'my_setting_field' );
	register_setting( 'settings-page', 'phone_number' );
	register_setting( 'settings-page', 'fax_number' );

	//SOCIAL SECTION
	add_settings_section(
		'socials_setting_section',
		__( 'Social links', 'my-textdomain' ),
		'socials_section_callback_function',
		'settings-page'
	);
	add_settings_field(
		'fb_link',
		__( 'Facebook', 'my-textdomain' ),
		'fb_social_markup',
		'settings-page',
		'socials_setting_section'
	);
	add_settings_field(
		'twitter_link',
		__( 'Twitter', 'my-textdomain' ),
		'twitter_social_markup',
		'settings-page',
		'socials_setting_section'
	);
	add_settings_field(
		'linkedin_link',
		__( 'Linkedin', 'my-textdomain' ),
		'linkedin_social_markup',
		'settings-page',
		'socials_setting_section'
	);
	add_settings_field(
		'pinterest_link',
		__( 'Pinterest', 'my-textdomain' ),
		'pint_social_markup',
		'settings-page',
		'socials_setting_section'
	);

//	Social links
	register_setting( 'settings-page', 'fb_link' );
	register_setting( 'settings-page', 'twitter_link' );
	register_setting( 'settings-page', 'linkedin_link' );
	register_setting( 'settings-page', 'pinterest_link' );
}


function my_setting_markup() {
	?>
    <p>
        <textarea type="text" id="my_setting_field" name="my_setting_field"
                  value="<?php echo get_option( 'my_setting_field' ); ?>"><?php echo get_option( 'my_setting_field' ); ?></textarea></p>

	<?php
}

function phone_number_markup() {
	?>
    <p>

        <input type="text" id="phone_number" name="phone_number"
               value="<?php echo get_option( 'phone_number' ); ?>"></p>
	<?php
}

function fax_number_markup() {
	?>
    <p>
        <input type="text" id="fax_number" name="fax_number"
               value="<?php echo get_option( 'fax_number' ); ?>"></p>
	<?php
}

function fb_social_markup() {
	?>
    <p>
        <input type="text" id="fb_link" name="fb_link"
               value="<?php echo get_option( 'fb_link' ); ?>"></p>
	<?php
}

function twitter_social_markup() {
	?>
    <p>
        <input type="text" id="twitter_link" name="twitter_link"
               value="<?php echo get_option( 'twitter_link' ); ?>"></p>
	<?php
}

function linkedin_social_markup() {
	?>
    <p>
        <input type="text" id="linkedin_link" name="linkedin_link"
               value="<?php echo get_option( 'linkedin_link' ); ?>"></p>
	<?php
}

function pint_social_markup() {
	?>
    <p>
        <input type="text" id="pinterest_link" name="pinterest_link"
               value="<?php echo get_option( 'pinterest_link' ); ?>"></p>
	<?php
}


function logo_uploader_markup() {


	if ( $image = wp_get_attachment_image_src( $image_id ) ) {

		echo '<a href="#" class="custom-url"><img src="' . $image[0] . '" /></a>
	      <a href="#" class="custom-rmv">'.__('Remove image','my-textdomain').'</a>
	      <input type="hidden" name="custom_logo" value="' . $image_id . '">';


	} else {
		echo '<a href="#" class="custom-url">'
		     . ( wp_get_attachment_image( get_option( 'custom_logo' ) )
				? wp_get_attachment_image( get_option( 'custom_logo' ) )
				: 'Upload image' ) . '</a>
	      <a href="#" class="custom-rmv" >'.__('Remove image','my-textdomain').'</a>
	      <input type="hidden" name="custom_logo" value="'.get_option( 'custom_logo' ).'">';

	}

}

