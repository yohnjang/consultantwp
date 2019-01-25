<?php 
		// Theme Color Section
		$wp_customize->add_section( 'sparkle_typography_section', array(
			'title'       => __( 'Typography', 'sparkle' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Typography Settings', 'sparkle' ),
			'priority'    => 80,
		) );

    $wp_customize->add_setting( 'sparkle_typography_mode_switch', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
					'sparkle_typography_mode_switch', array(
					'label'       => __( 'Typography Mode Switch', 'sparkle' ),
					'description' => 'Turning typography mode on will hide all images on your homepage',
					'section'     => 'sparkle_typography_section',
					'settings'    => 'sparkle_typography_mode_switch',
					'type'        => 'radio',
					'choices'     => array('off','on'),
					'priority'    => '5',
				)
			) 
		);
?>