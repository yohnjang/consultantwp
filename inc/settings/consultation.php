<?php 

		// Consultation Form Section
		$wp_customize->add_section( 'sparkle_consultation_form_section', array(
			'title'       => __( 'Consultation Form', 'sparkle' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Consultation Form Code Goes Here', 'sparkle' ),
			'priority'    => 50,
		) );

		$wp_customize->add_setting( 'sparkle_consultation_form_section_switch', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
					'sparkle_consultation_form_section_switch', array(
					'label'       => __( 'Consultation Form Section On/Off Switch', 'sparkle' ),
					'section'     => 'sparkle_consultation_form_section',
					'settings'    => 'sparkle_consultation_form_section_switch',
					'type'        => 'radio',
					'choices'     => array('off','on'),
					'priority'    => '5',
				)
			) 
		);

		$wp_customize->add_setting('sparkle_consultation_form_code', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_consultation_form_code', array(
					'label' => __( 'Consultation Form Code', 'sparkle'),
					'description' => __( ' Consultation Form code goes here '),
					'section' => 'sparkle_consultation_form_section',
					'settings' => 'sparkle_consultation_form_code',
					'type' => 'textarea',
					'priority' => '10',
				)
			)
		);


		$wp_customize->add_setting( 'sparkle_consultation_logo_switch', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
					'sparkle_consultation_logo_switch', array(
					'label'       => __( 'Logo', 'sparkle' ),
					'section'     => 'sparkle_consultation_form_section',
					'settings'    => 'sparkle_consultation_logo_switch',
					'type'        => 'radio',
					'choices'     => array('off','on'),
					'priority'    => '15',
				)
			) 
		);

		$wp_customize->add_setting('sparkle_consultation_logo_size', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_consultation_logo_size', array(
					'label' => __( 'Logo Size', 'sparkle'),
					'description' => 'Enter size without px, i.e. 200.  Default logo size is 200px',
					'section' => 'sparkle_consultation_form_section',
					'settings' => 'sparkle_consultation_logo_size',
					'type' => 'text',
					'priority' => '20',
				)
			)
    );
    ?>