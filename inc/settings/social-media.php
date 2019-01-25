<?php 


$wp_customize->add_section( 'sparkle_social_media_section', array(
  'title'       => __( 'Social Media', 'sparkle' ),
  'capability'  => 'edit_theme_options',
	'description' => __( 'If you would like to exclude any of your social media information, leave the section blank.', 'sparkle' ),
  'priority'    => 70,
) );


		$wp_customize->add_setting('sparkle_facebook', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_facebook', array(
					'label' => __( 'Facebook', 'sparkle'),
					'description' => __( 'Your Facebook URL goes here'),
					'section' => 'sparkle_social_media_section',
					'settings' => 'sparkle_facebook',
					'type' => 'text',
					'priority' => '20',
				)
			)
		);

		$wp_customize->add_setting('sparkle_twitter', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_twitter', array(
					'label' => __( 'Twitter', 'sparkle'),
					'description' => __( 'Your Twitter URL goes here'),
					'section' => 'sparkle_social_media_section',
					'settings' => 'sparkle_twitter',
					'type' => 'text',
					'priority' => '20',
				)
			)
		);

		$wp_customize->add_setting('sparkle_linkedin', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_linkedin', array(
					'label' => __( 'Linkedin', 'sparkle'),
					'description' => __( 'Your LinkedIn URL goes here'),
					'section' => 'sparkle_social_media_section',
					'settings' => 'sparkle_linkedin',
					'type' => 'text',
					'priority' => '20',
				)
			)
		);

		$wp_customize->add_setting('sparkle_instagram', array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sparkle_instagram', array(
					'label' => __( 'Instagram', 'sparkle'),
					'description' => __( 'Your Instagram URL goes here'),
					'section' => 'sparkle_social_media_section',
					'settings' => 'sparkle_instagram',
					'type' => 'text',
					'priority' => '20',
				)
			)
		);
?>