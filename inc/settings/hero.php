<?php 
/**************************************************************************************************** */

		// Hero Section
		$wp_customize->add_section( 'sparkle_hero_section', array(
			'title'       => __( 'Hero', 'sparkle' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Hero Section settings', 'sparkle' ),
			'priority'    => 25,
		) );


		$wp_customize->add_setting( 'sparkle_typewriter_effect_switch', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
			'default'						=> 'off',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
					'sparkle_typewriter_effect_switch', array(
					'label'       => __( 'Typewriter Effect On/Off Switch', 'sparkle' ),
					'section'     => 'sparkle_hero_section',
					'settings'    => 'sparkle_typewriter_effect_switch',
					'type'        => 'radio',
					'choices'     => array('off','on'),
					'priority'    => '10',
				)
			) 
		);

		$wp_customize->add_setting('sparkle_hero_image', array(
			'type' => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_file',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'sparkle_hero_image', array(
					'label' => __( 'Hero Image', 'sparkle'),
					'section' => 'sparkle_hero_section',
					'settings' => 'sparkle_hero_image',
					'priority' => '15',
				)
			)
		);


		$wp_customize->add_setting('sparkle_hero_headline', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_hero_headline', array(
					'label' => __( 'Hero Headline', 'sparkle'),
					'section' => 'sparkle_hero_section',
					'settings' => 'sparkle_hero_headline',
					'type' => 'text',
					'priority' => '20',
				)
			)
		);

		$wp_customize->add_setting('sparkle_hero_excerpt', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_hero_excerpt', array(
					'label' => __( 'Hero Excerpt', 'sparkle'),
					'section' => 'sparkle_hero_section',
					'settings' => 'sparkle_hero_excerpt',
					'type' => 'textarea',
					'priority' => '25',
				)
			)
    );

		$wp_customize->add_setting('sparkle_hero_mobile_x_position', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_hero_mobile_x_position', array(
					'label' => __( 'Mobile X Position', 'sparkle'),
					'section' => 'sparkle_hero_section',
					'settings' => 'sparkle_hero_mobile_x_position',
					'type' => 'text',
					'priority' => '30',
				)
			)
		);

		$wp_customize->add_setting('sparkle_hero_mobile_y_position', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_hero_mobile_y_position', array(
					'label' => __( 'Mobile Y Position', 'sparkle'),
					'section' => 'sparkle_hero_section',
					'settings' => 'sparkle_hero_mobile_y_position',
					'type' => 'text',
					'priority' => '35',
				)
			)
		);



		$wp_customize->add_setting('sparkle_hero_tablet_x_position', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_hero_tablet_x_position', array(
					'label' => __( 'Tablet X Position', 'sparkle'),
					'section' => 'sparkle_hero_section',
					'settings' => 'sparkle_hero_tablet_x_position',
					'type' => 'text',
					'priority' => '40',
				)
			)
		);

		$wp_customize->add_setting('sparkle_hero_tablet_y_position', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_hero_tablet_y_position', array(
					'label' => __( 'Tablet Y Position', 'sparkle'),
					'section' => 'sparkle_hero_section',
					'settings' => 'sparkle_hero_tablet_y_position',
					'type' => 'text',
					'priority' => '45',
				)
			)
		);


		$wp_customize->add_setting('sparkle_hero_x_position', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_hero_x_position', array(
					'label' => __( 'Desktop X Position', 'sparkle'),
					'section' => 'sparkle_hero_section',
					'settings' => 'sparkle_hero_x_position',
					'type' => 'text',
					'priority' => '50',
				)
			)
		);

		$wp_customize->add_setting('sparkle_hero_y_position', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_hero_y_position', array(
					'label' => __( 'Desktop Y Position', 'sparkle'),
					'section' => 'sparkle_hero_section',
					'settings' => 'sparkle_hero_y_position',
					'type' => 'text',
					'priority' => '55',
				)
			)
		);

		$wp_customize->add_setting('sparkle_hero_mobile_opacity', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_hero_mobile_opacity', array(
					'label' => __( 'Mobile Hero Gradient Opacity', 'sparkle'),
					'section' => 'sparkle_hero_section',
					'settings' => 'sparkle_hero_mobile_opacity',
					'type' => 'text',
					'priority' => '60',
				)
			)
		);

		$wp_customize->add_setting('sparkle_hero_tablet_opacity', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_hero_tablet_opacity', array(
					'label' => __( 'Tablet Hero Gradient Opacity', 'sparkle'),
					'section' => 'sparkle_hero_section',
					'settings' => 'sparkle_hero_tablet_opacity',
					'type' => 'text',
					'priority' => '65',
				)
			)
		);


		$wp_customize->add_setting('sparkle_hero_desktop_opacity', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_hero_desktop_opacity', array(
					'label' => __( 'Desktop Hero Gradient Opacity', 'sparkle'),
					'section' => 'sparkle_hero_section',
					'settings' => 'sparkle_hero_desktop_opacity',
					'type' => 'text',
					'priority' => '70',
				)
			)
		);

		$wp_customize->add_setting('sparkle_hero_gradient_percent_desktop', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_hero_gradient_percent_desktop', array(
					'label' => __( 'Desktop Hero Gradient Percent', 'sparkle'),
					'section' => 'sparkle_hero_section',
					'settings' => 'sparkle_hero_gradient_percent_desktop',
					'type' => 'text',
					'priority' => '75',
				)
			)
		);

		$wp_customize->add_setting('sparkle_hero_gradient_percent_tablet', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_hero_gradient_percent_tablet', array(
					'label' => __( 'Tablet Hero Gradient Percent', 'sparkle'),
					'section' => 'sparkle_hero_section',
					'settings' => 'sparkle_hero_gradient_percent_tablet',
					'type' => 'text',
					'priority' => '80',
				)
			)
		);

		$wp_customize->add_setting('sparkle_hero_gradient_percent_mobile', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_hero_gradient_percent_mobile', array(
					'label' => __( 'Mobile Hero Gradient Percent', 'sparkle'),
					'section' => 'sparkle_hero_section',
					'settings' => 'sparkle_hero_gradient_percent_mobile',
					'type' => 'text',
					'priority' => '85',
				)
			)
		);


    ?>