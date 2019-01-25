
<?php 

		$wp_customize->add_section( 'sparkle_footer_section', array(
			'title'       => __( 'Footer', 'sparkle' ),
			'capability'  => 'edit_theme_options',
			'priority'    => 60,
		) );

		$wp_customize->add_setting( 'sparkle_footer_section_switch', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
					'sparkle_footer_section_switch', array(
					'label'       => __( 'Footer Section On/Off Switch', 'sparkle' ),
					'section'     => 'sparkle_footer_section',
					'settings'    => 'sparkle_footer_section_switch',
					'type'        => 'radio',
					'choices'     => array('off','on'),
					'priority'    => '10',
				)
			) 
		);

		$wp_customize->add_setting( 'sparkle_footer_logo_switch', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
					'sparkle_footer_logo_switch', array(
					'label'       => __( 'Logo (On/Off)', 'sparkle' ),
					'section'     => 'sparkle_footer_section',
					'settings'    => 'sparkle_footer_logo_switch',
					'type'        => 'radio',
					'choices'     => array('off','on'),
					'priority'    => '20',
				)
			) 
		);


		$wp_customize->add_setting('sparkle_footer_nav_headline', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_footer_nav_headline', array(
					'label' => __( 'Logo Size (px)', 'sparkle'),
					'description' => 'Enter logo size without px, i.e. 200.  Default size is 200px',
					'section' => 'sparkle_footer_section',
					'settings' => 'sparkle_footer_nav_headline',
					'type' => 'text',
					'priority' => '25',
				)
			)
		);


		$wp_customize->add_setting('sparkle_footer_logo_size', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_footer_logo_size', array(
					'label' => __( 'Logo Size (px)', 'sparkle'),
					'description' => 'Enter logo size without px, i.e. 200.  Default size is 200px',
					'section' => 'sparkle_footer_section',
					'settings' => 'sparkle_footer_logo_size',
					'type' => 'text',
					'priority' => '30',
				)
			)
		);

    ?>