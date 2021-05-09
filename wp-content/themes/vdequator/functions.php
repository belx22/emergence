<?php

// Global variables define
define('VDEQUATOR_PARENT_TEMPLATE_DIR_URI', get_template_directory_uri());
define('VDEQUATOR_TEMPLATE_DIR_URI', get_stylesheet_directory_uri());
define('VDEQUATOR_TEMPLATE_DIR', trailingslashit(get_stylesheet_directory()));

add_action('wp_enqueue_scripts', 'vdequator_theme_css', 999);

function vdequator_theme_css() {
    wp_enqueue_style('vdequator-parent-style', VDEQUATOR_PARENT_TEMPLATE_DIR_URI . '/style.css');
    wp_enqueue_style('vdequator-child-style', get_stylesheet_uri(), array('vdequator-parent-style'));
    wp_enqueue_style('bootstrap-style', VDEQUATOR_PARENT_TEMPLATE_DIR_URI . '/css/bootstrap.css');
    wp_enqueue_style('vdequator-custom-style-css', VDEQUATOR_TEMPLATE_DIR_URI . "/css/custom.css");
    wp_dequeue_style('busiprof-custom-css', VDEQUATOR_PARENT_TEMPLATE_DIR_URI . '/css/custom.css');
}

if (!function_exists('wp_body_open')) {

    function wp_body_open() {
        /**
         * Triggered after the opening <body> tag.
         */
        do_action('wp_body_open');
    }

}

add_action('after_setup_theme', 'vdequator_setup');

function vdequator_setup() {
    load_theme_textdomain('vdequator', VDEQUATOR_TEMPLATE_DIR . '/languages');

    require( VDEQUATOR_TEMPLATE_DIR . '/functions/customizer/customizer-header-layout.php' );
    require( VDEQUATOR_TEMPLATE_DIR . '/functions/customizer/customizer-blog-layout.php' );
    require( VDEQUATOR_TEMPLATE_DIR . '/functions/template-tag.php' );

     //About Theme
    $theme = wp_get_theme(); // gets the current theme
    if ('vdequator' == $theme->name) {
        if (is_admin()) {
            require VDEQUATOR_TEMPLATE_DIR . '/admin/admin-init.php';
        }
    }
}

//Set for old user
if (!get_option('busiprof_user', false)) {
    //detect old user and set value
    $vdequator_user = get_option('busiprof_theme_options', array());
    if ((isset($vdequator_user['service_heading_one']) || isset($vdequator_user['service_tagline']) || isset($vdequator_user['home_blog_heading']) || isset($vdequator_user['home_blog_description']))) {
        add_option('busiprof_user', 'old');
    } else {
        add_option('busiprof_user', 'new');
    }
}

function vdequator_default_data() {
    $vdequator_current_options = wp_parse_args(get_option('busiprof_theme_options', array()), busiprof_theme_setup_data());
//print_r($header_setting);
    if (get_option('busiprof_user', 'new') == 'old' || $vdequator_current_options['busiprof_custom_css'] == 'nomorenow') {

        $array_new = array(
            'header_center_layout_setting' => 'default',
            'service_rotate_effect_layout_setting' => 'default',
            'blog_grid_layout_setting' => 'default',
            'testimonial_sideline_effect_layout_setting' => 'default',
        );
    } else {
        $array_new = array(
            'header_center_layout_setting' => 'center',
            'service_rotate_effect_layout_setting' => 'rotate_effect',
            'blog_grid_layout_setting' => 'grid',
            'testimonial_sideline_effect_layout_setting' => 'sideline_box_effect',
        );
    }
    
    return array_merge($array_new, $vdequator_current_options);
    
}

add_action('after_switch_theme', 'vdequator_import_data_in_busiprof_child_theme');

/**
 * Import theme mods when switching from Busiprof child theme to Busiprof
 */
function vdequator_import_data_in_busiprof_child_theme() {

    // Get the name of the previously active theme.
    $previous_theme = strtolower(get_option('theme_switched'));

    if (!in_array(
                    $previous_theme, array(
                'vdequator',
                'vdperanto',
                'arzine',
                'lazyprof',
                    )
            )) {
        return;
    }

    // Get the theme mods from the previous theme.
    $previous_theme_content = get_option('theme_mods_' . $previous_theme);

    if (!empty($previous_theme_content)) {
        foreach ($previous_theme_content as $previous_theme_mod_k => $previous_theme_mod_v) {
            set_theme_mod($previous_theme_mod_k, $previous_theme_mod_v);
        }
    }
}
