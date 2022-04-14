<?php

// Adds customizer section.
$wp_customize->add_section(
	'404_section',
	array(
		'priority'       => 80,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( '404 Options', 'bocco-group' ),
		'description'    => __( 'Place to edit the 404 content', 'bocco-group' ),
		'panel'          => 'boccog_theme_panel',
	)
);

$wp_customize->add_setting(
	'404_title',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_html',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'404_title',
		array(
			'label'   => __( 'Title', 'bocco-group' ),
			'type'    => 'text',
			'section' => '404_section',
		)
	)
);

$wp_customize->add_setting(
	'404_description',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'404_description',
		array(
			'label'   => __( 'Description', 'bocco-group' ),
			'type'    => 'textarea',
			'section' => '404_section',
		)
	)
);

$wp_customize->add_setting(
	'404_btn_text',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_html',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'404_btn_text',
		array(
			'label'   => __( 'Button Text', 'bocco-group' ),
			'type'    => 'text',
			'section' => '404_section',
		)
	)
);

$wp_customize->add_setting(
	'404_image',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => '',
	)
);

$wp_customize->add_control(
	new WP_Customize_Media_Control(
		$wp_customize,
		'404_image',
		array(
			'label'     => __( '404 Image', 'bocco-group' ),
			'section'   => '404_section',
			'mime_type' => 'image',
		)
	)
);
