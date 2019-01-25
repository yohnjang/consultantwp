<?php 
// Contact Section
		$wp_customize->add_section( 'sparkle_contact_section', array(
			'title'       => __( 'Contact Information', 'sparkle' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'If you would like to exclude any of your contact information, leave the section blank.', 'sparkle' ),
			'priority'    => 65,
		) );



		$wp_customize->add_setting('sparkle_phone_number', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_phone_number', array(
					'label' => __( 'Phone Number', 'sparkle'),
					'description' => __( ' Your Phone Number Goes Here '),
					'section' => 'sparkle_contact_section',
					'settings' => 'sparkle_phone_number',
					'type' => 'text',
					'priority' => '20',
				)
			)
		);

		$wp_customize->add_setting('sparkle_email', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_email', array(
					'label' => __( 'Email', 'sparkle'),
					'description' => __( ' Your Email Address Goes Here '),
					'section' => 'sparkle_contact_section',
					'settings' => 'sparkle_email',
					'type' => 'text',
					'priority' => '20',
				)
			)
		);

		$wp_customize->add_setting('sparkle_address', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_address', array(
					'label' => __( 'Address', 'sparkle'),
					'description' => __( ' Your Address Goes Here '),
					'section' => 'sparkle_contact_section',
					'settings' => 'sparkle_address',
					'type' => 'text',
					'priority' => '20',
				)
			)
		);

		$wp_customize->add_setting('sparkle_city_state', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_city_state', array(
					'label' => __( 'City/State', 'sparkle'),
					'description' => __( ' Your City/State Goes Here '),
					'section' => 'sparkle_contact_section',
					'settings' => 'sparkle_city_state',
					'type' => 'text',
					'priority' => '20',
				)
			)
		);

		$wp_customize->add_setting('sparkle_zip_code', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_zip_code', array(
					'label' => __( 'Zip Code', 'sparkle'),
					'description' => __( ' Your Zip Code Goes Here '),
					'section' => 'sparkle_contact_section',
					'settings' => 'sparkle_zip_code',
					'type' => 'text',
					'priority' => '20',
				)
			)
		);


    ?>