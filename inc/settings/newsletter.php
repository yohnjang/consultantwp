<?php
		// Newsletter Section
		$wp_customize->add_section( 'sparkle_newsletter_section', array(
			'title'       => __( 'Newsletter', 'sparkle' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Newsletter settings', 'sparkle' ),
			'priority'    => 40,
		) );


		$wp_customize->add_setting( 'sparkle_newsletter_section_switch', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
			'default'						=> 'off',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
					'sparkle_newsletter_section_switch', array(
					'label'       => __( 'Newsletter Section On/Off Switch', 'sparkle' ),
					'section'     => 'sparkle_newsletter_section',
					'settings'    => 'sparkle_newsletter_section_switch',
					'type'        => 'radio',
					'choices'     => array('off','on'),
					'priority'    => '5',
				)
			) 
		);



		$wp_customize->add_setting( 'sparkle_newsletter_logo_switch', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
			'default'						=> 'off',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
					'sparkle_newsletter_logo_switch', array(
					'label'       => __( 'Logo On/Off Switch', 'sparkle' ),
					'section'     => 'sparkle_newsletter_section',
					'settings'    => 'sparkle_newsletter_logo_switch',
					'type'        => 'radio',
					'choices'     => array('off','on'),
					'priority'    => '10',
				)
			) 
		);


		$wp_customize->add_setting('sparkle_newsletter_headline', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_newsletter_headline', array(
					'label' => __( 'Newsletter Headline', 'sparkle'),
					'section' => 'sparkle_newsletter_section',
					'settings' => 'sparkle_newsletter_headline',
					'type' => 'text',
					'priority' => '15',
				)
			)
		);

		$wp_customize->add_setting('sparkle_newsletter_excerpt', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_newsletter_excerpt', array(
					'label' => __( 'Newsletter Excerpt', 'sparkle'),
					'section' => 'sparkle_newsletter_section',
					'settings' => 'sparkle_newsletter_excerpt',
					'type' => 'text',
					'priority' => '15',
				)
			)
		);


		$wp_customize->add_setting('sparkle_newsletter_code', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_newsletter_code', array(
					'label' => __( 'Newsletter Code', 'sparkle'),
					'description' => __( ' Newsletter code goes here '),
					'section' => 'sparkle_newsletter_section',
					'settings' => 'sparkle_newsletter_code',
					'type' => 'text',
					'priority' => '20',
				)
			)
		);
?>