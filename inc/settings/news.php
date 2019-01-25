<?php
		// News Section
		$wp_customize->add_section( 'sparkle_news_section', array(
			'title'       => __( 'News', 'sparkle' ),
			'capability'  => 'edit_theme_options',
			'priority'    => 55,
		) );

		$wp_customize->add_setting( 'sparkle_news_section_switch', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
					'sparkle_news_section_switch', array(
					'label'       => __( 'News Section Switch', 'sparkle' ),
					'section'     => 'sparkle_news_section',
					'description' => 'Turn section off, on, or into a slider',
					'settings'    => 'sparkle_news_section_switch',
					'type'        => 'radio',
					'choices'     => array('off','regular','slider'),
					'priority'    => '5',
				)
			) 
		);

		$wp_customize->add_setting('sparkle_news_headline_main', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_news_headline_main', array(
					'label' => __( 'News Section Headline', 'sparkle'),
					'section' => 'sparkle_news_section',
					'settings' => 'sparkle_news_headline_main',
					'type' => 'text',
					'priority' => '10',
				)
			)
		);

		$wp_customize->add_setting('sparkle_news_excerpt_main', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_news_excerpt_main', array(
					'label' => __( 'News Section Description', 'sparkle'),
					'section' => 'sparkle_news_section',
					'settings' => 'sparkle_news_excerpt_main',
					'type' => 'text',
					'priority' => '15',
				)
			)
		);

    ?>