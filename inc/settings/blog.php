<?php 
		// Theme Color Section
		$wp_customize->add_section( 'sparkle_blog_section', array(
			'title'       => __( 'Blog', 'sparkle' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Blog Settings', 'sparkle' ),
			'priority'    => 90,
		) );

    $wp_customize->add_setting( 'sparkle_blog_sidebar_switch', array(
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sparkle_theme_slug_sanitize_radio',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
					'sparkle_blog_sidebar_switch', array(
					'label'       => __( 'Blog Sidebar On/Off Switch', 'sparkle' ),
					'section'     => 'sparkle_blog_section',
					'settings'    => 'sparkle_blog_sidebar_switch',
					'type'        => 'radio',
					'choices'     => array('off','on'),
					'priority'    => '5',
				)
			) 
		);
?>