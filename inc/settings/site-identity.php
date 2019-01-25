<?php $wp_customize->add_setting('sparkle_main_logo_size', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_main_logo_size', array(
					'label' => __( 'Set main logo size (px)', 'sparkle'),
					'description' => 'Set your main logo size in the navigation (without px), i.e. 200.  Default logo size is 200px',
					'section' => 'title_tagline',
					'settings' => 'sparkle_main_logo_size',
					'type' => 'text',
					'priority' => '10',
				)
			)
		);
		
		$wp_customize->add_setting('sparkle_light_logo', array(
			'type' => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_file',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'sparkle_light_logo', array(
					'label' => __( 'Light Logo', 'sparkle'),
					'section' => 'title_tagline',
					'settings' => 'sparkle_light_logo',
					'priority' => '5',
				)
			)
		);
  ?>