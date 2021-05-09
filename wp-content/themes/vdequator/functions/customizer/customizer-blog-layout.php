<?php

function vdequator_blog_layout_customizer($wp_customize) {

    $vdequator_current_options = wp_parse_args(get_option('busiprof_theme_options', array()), busiprof_theme_setup_data());

    // blog Layout settings
    if (get_option('busiprof_user', 'new')=='old' || $vdequator_current_options['busiprof_custom_css'] == 'nomorenow') {

        $wp_customize->add_setting('busiprof_theme_options[blog_grid_layout_setting]', array(
            'default' => 'default',
            'sanitize_callback' => 'vdequator_sanitize_radio',
            'type' => 'option'
        ));
    } else {

        $wp_customize->add_setting('busiprof_theme_options[blog_grid_layout_setting]', array(
            'default' => 'grid',
            'sanitize_callback' => 'vdequator_sanitize_radio',
            'type' => 'option'
        ));
    }
    $wp_customize->add_control(new vdequator_Image_Radio_Button_Custom_Control($wp_customize, 'busiprof_theme_options[blog_grid_layout_setting]',
            array(
                'label' => esc_html__('Blog Layout Setting', 'vdequator'),
                'section' => 'recent_blog_settings',
                'priority'              => 20,
                'choices' => array(
                    'default' => array(
                        'image' => get_stylesheet_directory_uri() . '/images/vdequator-blog-default.png',
                        'name' => esc_html__('Standard Layout', 'vdequator')
                    ),
                    'grid' => array(
                        'image' => get_stylesheet_directory_uri() . '/images/vdequator-blog-grid.png',
                        'name' => esc_html__('Grid Layout', 'vdequator')
                    )
                )
            )
    ));
}
add_action('customize_register', 'vdequator_blog_layout_customizer');