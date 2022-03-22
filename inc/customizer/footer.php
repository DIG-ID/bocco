<?php

// Adds customizer section.
$wp_customize->add_section(
	'footer_section',
	array(
		'priority'       => 90,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Footer', 'bocco-group' ),
		'description'    => __( 'Place to edit the footer content', 'bocco-group' ),
		'panel'          => 'boccog_theme_panel',
	)
);

// Footer logo
$wp_customize->add_setting(
	'footer-logo',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'boccog_sanitize_image',
	)
);

$wp_customize->add_control(
	new WP_Customize_Media_Control(
		$wp_customize,
		'footer-logo',
		array(
			'label'     => __( 'Footer Logo', 'bocco-group' ),
			'section'   => 'footer_section',
			'mime_type' => 'image',
		)
	)
);
