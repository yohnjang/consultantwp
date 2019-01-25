<?php 
		// Theme Color Section
		$wp_customize->add_section( 'sparkle_theme_color_section', array(
			'title'       => __( 'Theme Color Options', 'sparkle' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Choose your theme colors', 'sparkle' ),
			'priority'    => 75,
		) );

		$wp_customize->add_setting( 'sparkle_theme_color', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
					'sparkle_theme_color', array(
					'label'       => __( 'Theme Color', 'sparkle' ),
					'section'     => 'sparkle_theme_color_section',
					'settings'    => 'sparkle_theme_color',
					'type'        => 'radio',
					'choices'     => array('monochrome', 'blue', 'red', 'yellow', 'purple', 'green', 'orange' ),
					'priority'    => '5',
				)
			) 
		);

		$wp_customize->add_setting( 'sparkle_black_white_switch', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
			'default'						=> 'off',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
					'sparkle_black_white_switch', array(
					'label'       => __( 'Turn On/Off Black and White Image Overlays', 'sparkle' ),
					'section'     => 'sparkle_theme_color_section',
					'settings'    => 'sparkle_black_white_switch',
					'type'        => 'radio',
					'choices'     => array('off','on'),
					'priority'    => '10',
				)
			) 
		);





?>