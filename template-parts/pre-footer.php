<div class="pre-footer">
    <div class="pre-footer__left">
		<?php
		echo '<h2>' . __( 'Contact us', 'my-textdomain' ) . '</h2>';
		?>
        <hr>

		<?php
		echo do_shortcode( '[contact-form-7 id="14" title="Contact form"]' );

		?>
    </div>
    <div class="pre-footer__right">
		<?php
		echo '<h2>' . __( 'Reach us', 'my-textdomain' ) . '</h2>';
		?>
        <hr>
		<?php
		if ( get_option( 'my_setting_field' ) ):
			?>  <p><?php
			echo get_option( 'my_setting_field' );
			?></p><?php
		endif;
		?>
		<?php
		if ( get_option( 'phone_number' ) ):
			?><p class="contacts-tel"><?php
			echo  '<span>'.__( 'Phone:', 'my-textdomain' ) .'</span> '
			     . '<a href="tel:' . get_option( 'phone_number' ) . '">'
			     . get_option( 'phone_number' ) . '</a>';
			?></p><?php
		endif;
		?>
		<?php
		if ( get_option( 'fax_number' ) ):
			?><p class="contacts-tel"><?php
			echo   '<span>'.__( 'Fax:', 'my-textdomain' ).'</span> '
			     . '<a href="tel:' . get_option( 'fax_number' ) . '">'
			     . get_option( 'fax_number' ) . '</a>';
			?></p><?php
		endif;
		?>
        <div class="pre-footer__right-social">
			<?php
			if ( get_option( 'fb_link' ) ):
				echo '<a href="tel:' . get_option( 'fb_link' ) . '"><img src="'.get_template_directory_uri().'/assets/images/socials/fb.png" alt="Social link"></a>';
			endif;
			if ( get_option( 'twitter_link' ) ):
				echo '<a href="tel:' . get_option( 'twitter_link' ) . '"><img src="'.get_template_directory_uri().'/assets/images/socials/fb.png" alt="Social link"></a>';
			endif;
			if ( get_option( 'linkedin_link' ) ):
				echo '<a href="tel:' . get_option( 'linkedin_link' ) . '"><img src="'.get_template_directory_uri().'/assets/images/socials/fb.png" alt="Social link"></a>';
			endif;
			if ( get_option( 'pinterest_link' ) ):
				echo
					'<a href="' . get_option( 'pinterest_link' ) . '"><img src="'.get_template_directory_uri().'/assets/images/socials/fb.png" alt="Social link"></a>';
			endif;
			?>
        </div>

    </div>
</div>


