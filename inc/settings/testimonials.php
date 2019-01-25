<?php 


		// testimonials Section
		$wp_customize->add_section( 'sparkle_testimonials_section', array(
			'title'       => __( 'Testimonials', 'sparkle' ),
			'capability'  => 'edit_theme_options',
			'priority'    => 45,
		) );

		$wp_customize->add_setting( 'sparkle_testimonials_section_switch', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
			'default'						=> 'off',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
					'sparkle_testimonials_section_switch', array(
					'label'       => __( 'Testimonial Section Options', 'sparkle' ),
					'section'     => 'sparkle_testimonials_section',
					'description' => 'Turn section off, on, or into a slider',
					'settings'    => 'sparkle_testimonials_section_switch',
					'type'        => 'radio',
					'choices'     => array('off','regular','slider'),
					'priority'    => '5',
				)
			) 
		);

		$wp_customize->add_setting( 'sparkle_quote_graphic_switch', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
			'default'						=> 'off',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
					'sparkle_quote_graphic_switch', array(
					'label'       => __( 'Quotation Graphic On/Off', 'sparkle' ),
					'section'     => 'sparkle_testimonials_section',
					'settings'    => 'sparkle_quote_graphic_switch',
					'type'        => 'radio',
					'choices'     => array('off','on'),
					'priority'    => '6',
				)
			) 
		);


		$wp_customize->add_setting('sparkle_testimonials_headline_main', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_headline_main', array(
					'label' => __( 'Testimonial Section Headline', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_headline_main',
					'type' => 'text',
					'priority' => '10',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_excerpt_main', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_excerpt_main', array(
					'label' => __( 'Testimonial Section Description', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_excerpt_main',
					'type' => 'text',
					'priority' => '15',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_image_1', array(
			'type' => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_file',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'sparkle_testimonials_image_1', array(
					'label' => __( '#1 Image', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'description' => 'Square Images Work Best',
					'settings' => 'sparkle_testimonials_image_1',
					'priority' => '20',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_headline_1', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_headline_1', array(
					'label' => __( '#1 Headline', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_headline_1',
					'type' => 'text',
					'priority' => '25',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_excerpt_1', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_excerpt_1', array(
					'label' => __( '#1 Excerpt', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_excerpt_1',
					'type' => 'text',
					'priority' => '30',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_url_1', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_url_1', array(
					'label' => __( '#1 URL', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_url_1',
					'type' => 'text',
					'priority' => '35',
				)
			)
		);


		$wp_customize->add_setting('sparkle_testimonials_image_2', array(
			'type' => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_file',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'sparkle_testimonials_image_2', array(
					'label' => __( '#2 Image', 'sparkle'),
					'description' => 'Square Images Work Best',
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_image_2',
					'priority' => '40',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_headline_2', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_headline_2', array(
					'label' => __( '#2 Headline', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_headline_2',
					'type' => 'text',
					'priority' => '45',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_excerpt_2', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_excerpt_2', array(
					'label' => __( '#2 Excerpt', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_excerpt_2',
					'type' => 'text',
					'priority' => '50',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_url_2', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_url_2', array(
					'label' => __( '#2 URL', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_url_2',
					'type' => 'text',
					'priority' => '55',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_image_3', array(
			'type' => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_file',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'sparkle_testimonials_image_3', array(
					'label' => __( '#3 Image', 'sparkle'),
					'description' => 'Square Images Work Best',
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_image_3',
					'priority' => '60',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_headline_3', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_headline_3', array(
					'label' => __( '#3 Headline ', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_headline_3',
					'type' => 'text',
					'priority' => '65',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_excerpt_3', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_excerpt_3', array(
					'label' => __( '#3 Excerpt', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_excerpt_3',
					'type' => 'textarea',
					'priority' => '70',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_url_3', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_url_3', array(
					'label' => __( '#3 URL', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_url_3',
					'type' => 'text',
					'priority' => '75',
				)
			)
		);














		$wp_customize->add_setting('sparkle_testimonials_image_4', array(
			'type' => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_file',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'sparkle_testimonials_image_4', array(
					'label' => __( '#4 Image', 'sparkle'),
					'description' => 'Square Images Work Best',
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_image_4',
					'priority' => '80',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_headline_4', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_headline_4', array(
					'label' => __( '#4 Headline ', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_headline_4',
					'type' => 'text',
					'priority' => '85',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_excerpt_4', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_excerpt_4', array(
					'label' => __( '#4 Excerpt', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_excerpt_4',
					'type' => 'text',
					'priority' => '90',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_url_4', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_url_4', array(
					'label' => __( '#4 URL', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_url_4',
					'type' => 'text',
					'priority' => '95',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_image_5', array(
			'type' => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_file',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'sparkle_testimonials_image_5', array(
					'label' => __( '#5 Image', 'sparkle'),
					'description' => 'Square Images Work Best',
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_image_5',
					'priority' => '100',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_headline_5', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_headline_5', array(
					'label' => __( '#5 Headline ', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_headline_5',
					'type' => 'text',
					'priority' => '105',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_excerpt_5', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_excerpt_5', array(
					'label' => __( '#5 Excerpt', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_excerpt_3',
					'type' => 'text',
					'priority' => '110',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_url_5', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_url_5', array(
					'label' => __( '#5 URL', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_url_5',
					'type' => 'text',
					'priority' => '115',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_image_6', array(
			'type' => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_file',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'sparkle_testimonials_image_6', array(
					'label' => __( '#6 Image', 'sparkle'),
					'description' => 'Square Images Work Best',
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_image_6',
					'priority' => '120',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_headline_6', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_headline_6', array(
					'label' => __( '#6 Headline ', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_headline_6',
					'type' => 'text',
					'priority' => '125',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_excerpt_6', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_excerpt_6', array(
					'label' => __( '#6 Excerpt', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_excerpt_6',
					'type' => 'text',
					'priority' => '130',
				)
			)
		);

		$wp_customize->add_setting('sparkle_testimonials_url_6', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_testimonials_url_6', array(
					'label' => __( '#6 URL', 'sparkle'),
					'section' => 'sparkle_testimonials_section',
					'settings' => 'sparkle_testimonials_url_6',
					'type' => 'text',
					'priority' => '135',
				)
			)
		);

    ?>