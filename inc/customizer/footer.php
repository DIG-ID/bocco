<?php

// Adds customizer section.
$wp_customize->add_section(
	'footer_section',
	array(
		'priority'       => 100,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Footer', 'bocco-group' ),
		'description'    => __( 'Place to edit the footer content', 'bocco-group' ),
		'panel'          => 'boccog_theme_panel',
	)
);

// Footer logo
/*$wp_customize->add_setting(
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
);*/

$wp_customize->add_setting(
	'footer_contacts_title',
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
		'footer_contacts_title',
		array(
			'label'   => __( 'Contacts - Title', 'bocco-group' ),
			'type'    => 'text',
			'section' => 'footer_section',
		)
	)
);

$wp_customize->add_setting(
	'footer_contacts_address',
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
		'footer_contacts_address',
		array(
			'label'   => __( 'Contacts - Address', 'bocco-group' ),
			'type'    => 'textarea',
			'section' => 'footer_section',
		)
	)
);

$wp_customize->add_setting(
	'footer_contacts_tel',
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
		'footer_contacts_tel',
		array(
			'label'   => __( 'Contacts - Telephone', 'bocco-group' ),
			'type'    => 'tel',
			'section' => 'footer_section',
		)
	)
);

$wp_customize->add_setting(
	'footer_contacts_fax',
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
		'footer_contacts_fax',
		array(
			'label'   => __( 'Contacts - Fax', 'bocco-group' ),
			'type'    => 'tel',
			'section' => 'footer_section',
		)
	)
);

$wp_customize->add_setting(
	'footer_contacts_email',
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
		'footer_contacts_email',
		array(
			'label'   => __( 'Contacts - Email', 'bocco-group' ),
			'type'    => 'email',
			'section' => 'footer_section',
		)
	)
);
