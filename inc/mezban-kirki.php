<?php
/**
 * Theme Customizer: Mezban Theme
 * Version: 1.1.0
 */

// Create the main customizer panel
new \Kirki\Panel(
    'mezban_panel',
    [
        'priority'    => 10,
        'title'       => esc_html__( 'Mezban Control Options', 'mezban' ),
        'description' => esc_html__( 'Customize Mezban theme options', 'mezban' ),
    ]
);

// Section 01: Header Logo
function mezban_header_logo_section() {
    // Create a section for the header logo
    new \Kirki\Section(
        'header_logo_section',
        [
            'title'       => esc_html__( 'Header', 'mezban' ),
            'description' => esc_html__( 'Customize your header options.', 'mezban' ),
            'panel'       => 'mezban_panel',
            'priority'    => 160,
        ]
    );

    // Header Logo Field
    new \Kirki\Field\Image(
        [
            'settings'    => 'header_logo',
            'label'       => esc_html__( 'Header Logo', 'mezban' ),
            'description' => esc_html__( 'Upload your header logo.', 'mezban' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/images/img/logo.png',
        ]
    );
}

mezban_header_logo_section();


// Section 02: Footer Logo and Social Links
function mezban_footer_section() {
    // Create a section for the footer logo and social links
    new \Kirki\Section(
        'footer_section',
        [
            'title'       => esc_html__( 'Footer', 'mezban' ),
            'description' => esc_html__( 'Customize your footer options.', 'mezban' ),
            'panel'       => 'mezban_panel',
            'priority'    => 160,
        ]
    );

    // Footer Logo Field
    new \Kirki\Field\Image(
        [
            'settings'    => 'footer_logo',
            'label'       => esc_html__( 'Footer Logo', 'mezban' ),
            'description' => esc_html__( 'Upload your footer logo.', 'mezban' ),
            'section'     => 'footer_section',
            'default'     => get_template_directory_uri() . '/assets/images/img/logo footer.png',
        ]
    );

    // Social Media Links Fields
    new \Kirki\Field\Text(
        [
            'settings'    => 'header_facebook_url',
            'label'       => esc_html__( 'Facebook URL', 'mezban' ),
            'section'     => 'footer_section',
            'default'     => '#',
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'header_instagram_url',
            'label'       => esc_html__( 'Instagram URL', 'mezban' ),
            'section'     => 'footer_section',
            'default'     => '#',
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'header_twitter_url',
            'label'       => esc_html__( 'Twitter URL', 'mezban' ),
            'section'     => 'footer_section',
            'default'     => '#',
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'header_pinterest_url',
            'label'       => esc_html__( 'Pinterest URL', 'mezban' ),
            'section'     => 'footer_section',
            'default'     => '#',
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings'    => 'copyright_text',
            'label'       => esc_html__( 'Copyright Text', 'mezban' ),
            'section'     => 'footer_section',
            'default'     => esc_html__( '© 2021 Mezban Design by FoxCoders.', 'mezban' ),
        ]
    );
}

mezban_footer_section();



