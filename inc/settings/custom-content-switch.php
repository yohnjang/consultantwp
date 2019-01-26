<?php 
		// Theme Color Section
		$wp_customize->add_section( 'sparkle_custom_content_section', array(
			'title'       => __( 'Custom Content', 'sparkle' ),
			'capability'  => 'edit_theme_options',
			'priority'    => 85,
		) );

    $wp_customize->add_setting( 'sparkle_custom_content_switch', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
					'sparkle_custom_content_switch', array(
					'label'       => __( 'Custom Content Switch', 'sparkle' ),
					'description' => 'Choose where your custom content will show.',
					'section'     => 'sparkle_custom_content_section',
					'settings'    => 'sparkle_custom_content_switch',
					'type'        => 'radio',
					'choices'     => array('off','After CTA Section', 'After Featured Section', 'After Newsletter Section','After Testimonials','After Consultation Form', 'After News Section'),
					'priority'    => '5',
				)
			) 
		);
?>