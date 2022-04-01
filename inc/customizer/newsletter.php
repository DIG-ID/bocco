<?php

// Adds customizer section.
$wp_customize->add_section(
	'newsletter_section',
	array(
		'priority'       => 70,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Newsletter', 'bocco-group' ),
		'description'    => __( 'Place to edit the Newsletter content', 'bocco-group' ),
		'panel'          => 'boccog_theme_panel',
	)
);

$wp_customize->add_setting(
	'newsletter_title',
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
		'newsletter_title',
		array(
			'label'   => __( 'Title', 'bocco-group' ),
			'type'    => 'text',
			'section' => 'newsletter_section',
		)
	)
);

$wp_customize->add_setting(
	'newsletter_description',
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
		'newsletter_description',
		array(
			'label'   => __( 'Description', 'bocco-group' ),
			'type'    => 'textarea',
			'section' => 'newsletter_section',
		)
	)
);

$wp_customize->add_setting(
	'newsletter_shortcode',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_attr',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'newsletter_shortcode',
		array(
			'label'   => __( 'Shortcode', 'bocco-group' ),
			'type'    => 'text',
			'section' => 'newsletter_section',
		)
	)
);