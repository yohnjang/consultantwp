<?php 

$wp_customize->add_section( 'sparkle_top_bar_section', array(
  'title'       => __( 'Top Bar', 'sparkle' ),
  'capability'  => 'edit_theme_options',
  'priority'    => 20,
) );


		$wp_customize->add_setting( 'sparkle_top_bar_switch', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_top_bar_switch', array(
					'label'       => __( 'Top Bar On/Off Switch', 'sparkle' ),
					'description' => __( 'Turn Top Bar On/Off', 'sparkle' ),
					'section'     => 'sparkle_top_bar_section',
					'settings'    => 'sparkle_top_bar_switch',
					'type'        => 'radio',
					'choices'     => array('off','on'),
					'priority'    => '10',
				)
			) 
		);


?>