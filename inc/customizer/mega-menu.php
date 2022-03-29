<?php
// Adds customizer section for the social icons.
$wp_customize->add_section(
	'mega_menu_section',
	array(
		'priority'       => 70,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Mega Menu', 'bocco-group' ),
		'description'    => __( 'Edit the content for the mega menu/sub menu.', 'bocco-group' ),
		'panel'          => 'boccog_theme_panel',
	)
);


$wp_customize->add_setting(
	'mega_menu_title',
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
		'mega_menu_title',
		array(
			'label'   => __( 'Title', 'bocco-group' ),
			'type'    => 'text',
			'section' => 'mega_menu_section',
		)
	)
);

$wp_customize->add_setting(
	'mega_menu_description',
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
		'mega_menu_description',
		array(
			'label'   => __( 'Description', 'bocco-group' ),
			'type'    => 'textarea',
			'section' => 'mega_menu_section',
		)
	)
);

$wp_customize->add_setting(
	'mega_menu_btn_title',
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
		'mega_menu_btn_title',
		array(
			'label'   => __( 'Button Title', 'bocco-group' ),
			'type'    => 'text',
			'section' => 'mega_menu_section',
		)
	)
);


$wp_customize->add_setting(
	'mega_menu_btn_link',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_url',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'mega_menu_btn_link',
		array(
			'label'   => __( 'Button Link', 'bocco-group' ),
			'type'    => 'url',
			'section' => 'mega_menu_section',
		)
	)
);
