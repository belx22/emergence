<?php
$vdequator_options = wp_parse_args(get_option('busiprof_theme_options', array()), vdequator_default_data());
if ($vdequator_options['home_recentblog_section_enabled'] == 'on') {
    if ($vdequator_options['blog_grid_layout_setting'] == 'grid') {
        vdequator_blog_grid_layout();
    } else {
        vdequator_blog_default_layout();
    }
}