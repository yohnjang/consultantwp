<?php 
		// Slider Section
		$wp_customize->add_section( 'sparkle_cta_section', array(
			'title'       => __( 'Call To Action', 'sparkle' ),
			'capability'  => 'edit_theme_options',
			'priority'    => 30,
		) );

		$wp_customize->add_setting( 'sparkle_cta_switch', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_cta_switch', array(
					'label'       => __( 'On/Off', 'sparkle' ),
					'section'     => 'sparkle_cta_section',
					'settings'    => 'sparkle_cta_switch',
					'type'        => 'radio',
					'choices'     => array('Off', 'On'),
					'priority'    => '10',
				)
			) 
		);

$wp_customize->add_setting('sparkle_cta_headline', array(
	'type' => 'theme_mod',
	'capability' => 'edit_theme_options',
));

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'sparkle_cta_headline', array(
			'label' => __( 'CTA Headline', 'sparkle'),
			'section' => 'sparkle_cta_section',
			'settings' => 'sparkle_cta_headline',
			'type' => 'text',
			'priority' => '20',
		)
	)
);

$wp_customize->add_setting('sparkle_cta_button_text', array(
	'type' => 'theme_mod',
	'capability' => 'edit_theme_options',
));

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'sparkle_cta_excerpt', array(
			'label' => __( 'CTA Button Text', 'sparkle'),
			'section' => 'sparkle_cta_section',
			'settings' => 'sparkle_cta_button_text',
			'type' => 'text',
			'priority' => '25',
		)
	)
);

$wp_customize->add_setting('sparkle_cta_url', array(
	'type' => 'theme_mod',
	'capability' => 'edit_theme_options',
));

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'sparkle_cta_url', array(
			'label' => __( 'CTA Button URL', 'sparkle'),
			'section' => 'sparkle_cta_section',
			'settings' => 'sparkle_cta_url',
			'type' => 'text',
			'priority' => '25',
		)
	)
);

?>