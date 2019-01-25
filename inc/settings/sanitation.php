<?php 
//file input sanitization function
		function sparkle_theme_slug_sanitize_file( $file, $setting ) {
			$mimes = array(
					'jpg|jpeg|jpe' => 'image/jpeg',
					'gif'          => 'image/gif',
					'png'          => 'image/png'
			);
			$file_ext = wp_check_filetype( $file, $mimes );
			return ( $file_ext['ext'] ? $file : $setting->default );
		}
		//select input sanitization function
		function sparkle_theme_slug_sanitize_select( $input, $setting ){
			$input = sanitize_key( $input );
			$choices = $setting->manager->get_control( $setting->id )->choices;
			return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
		}
		//radio input sanitization function
		function sparkle_theme_slug_sanitize_radio( $input, $setting ){
			$input = sanitize_key($input);
			$choices = $setting->manager->get_control( $setting->id )->choices;
			return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                				
		}
?>