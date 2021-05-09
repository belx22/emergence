<?php
if (!function_exists('vdequator_header_center_layout')) :

    function vdequator_header_center_layout() {
        $vdequator_current_options = wp_parse_args(get_option('busiprof_theme_options', array()), busiprof_theme_setup_data());
        ?>

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="index-logo index2">
            <div class="container">
                <div class="navbar-header">
                    <?php
                    if (($vdequator_current_options['enable_logo_text'] == true) && ($vdequator_current_options['enable_logo_text'] != 'nomorenow') && (!has_custom_logo())) {
                        echo '<a class="navbar-brand" href="' . esc_url(home_url('/')) . '" class="brand">';
                        bloginfo('name');
                        echo '</a>';
                    } elseif (($vdequator_current_options['upload_image'] != "") && ($vdequator_current_options['enable_logo_text'] != 'nomorenow') && (!has_custom_logo())) {
                        ?>
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" class="brand">
                            <img alt="<?php bloginfo("name"); ?>" src="<?php echo esc_url($vdequator_current_options['upload_image']); ?>" 
                                 alt="<?php bloginfo("name"); ?>"
                                 class="logo_imgae" style="width:<?php echo esc_attr($vdequator_current_options['width']) . 'px'; ?>; height:<?php echo esc_attr($vdequator_current_options['height']) . 'px'; ?>;">
                        </a>
                        <?php
                    } else {
                        $vdequator_current_options['enable_logo_text'] = 'nomorenow';
                        update_option('busiprof_theme_options', $vdequator_current_options);
                        if (has_custom_logo()):
                            echo '<span class="navbar-brand">';
                            the_custom_logo();
                            echo '</span>';
                        endif;
                        ?>
                        <div class="custom-logo-link-url">
                            <h1 class="site-title"><a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" ><?php bloginfo('name'); ?></a>
                            </h1>
                            <?php
                            $vdequator_description = get_bloginfo('description', 'display');
                            if ($vdequator_description || is_customize_preview()) :
                                ?>
                                <p class="site-description"><?php echo $vdequator_description; ?></p>
                            <?php endif; ?>
                        </div>
                        <?php
                    }
                    ?>	

                </div>
            </div>
        </div>

        <nav class="navbar navbar-default navbar2">
            <div class="container">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"><?php esc_html_e('Toggle navigation', 'vdequator'); ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'nav-collapse collapse navbar-inverse-collapse',
                        'menu_class' => 'nav navbar-nav navbar-left',
                        'fallback_cb' => 'busiprof_fallback_page_menu',
                        'walker' => new Busiprof_nav_walker())
                    );
                    ?>			
                </div>

            </div>
        </nav>

        <?php
    }

endif;

if (!function_exists('vdequator_header_default_layout')) :

    function vdequator_header_default_layout() {
        $vdequator_current_options = wp_parse_args(get_option('busiprof_theme_options', array()), busiprof_theme_setup_data());
        ?>
        <!-- Navbar -->	
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <?php
                    if (($vdequator_current_options['enable_logo_text'] == true) && ($vdequator_current_options['enable_logo_text'] != 'nomorenow') && (!has_custom_logo())) {
                        echo '<a class="navbar-brand" href="' . esc_url(home_url('/')) . '" class="brand">';
                        bloginfo('name');
                        echo '</a>';
                    } elseif (($vdequator_current_options['upload_image'] != "") && ($vdequator_current_options['enable_logo_text'] != 'nomorenow') && (!has_custom_logo())) {
                        ?>
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" class="brand">
                            <img alt="<?php bloginfo("name"); ?>" src="<?php echo esc_url($vdequator_current_options['upload_image']); ?>" 
                                 alt="<?php bloginfo("name"); ?>"
                                 class="logo_imgae" style="width:<?php echo esc_attr($vdequator_current_options['width']) . 'px'; ?>; height:<?php echo esc_attr($vdequator_current_options['height']) . 'px'; ?>;">
                        </a>
                        <?php
                    } else {
                        $vdequator_current_options['enable_logo_text'] = 'nomorenow';
                        update_option('busiprof_theme_options', $vdequator_current_options);
                        if (has_custom_logo()):
                            echo '<span class="navbar-brand">';
                            the_custom_logo();
                            echo '</span>';
                        endif;
                        ?>
                        <div class="custom-logo-link-url">
                            <h1 class="site-title"><a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" ><?php bloginfo('name'); ?></a>
                            </h1>
                            <?php
                            $vdequator_description = get_bloginfo('description', 'display');
                            if ($vdequator_description || is_customize_preview()) :
                                ?>
                                <p class="site-description"><?php echo $vdequator_description; ?></p>
                            <?php endif; ?>
                        </div>
                        <?php
                    }
                    ?>	
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only"><?php esc_html_e('Toggle navigation', 'vdequator'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'nav-collapse collapse navbar-inverse-collapse',
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'fallback_cb' => 'busiprof_fallback_page_menu',
                        'walker' => new Busiprof_nav_walker())
                    );
                    ?>			
                </div>
            </div>
        </nav>	
        <!-- End of Navbar -->
        <?php
    }

endif;

/**
 * Masonry 2 Column blog Layout
 */
if (!function_exists('vdequator_blog_grid_layout')) :

    function vdequator_blog_grid_layout() {
        $vdequator_current_options = wp_parse_args(get_option('busiprof_theme_options', array()), vdequator_default_data());
        ?>
        <section class="site-content">	
            <div class="container">	

                <div class="row">
                <?php if ($vdequator_current_options['recent_blog_title'] != '' || $vdequator_current_options['recent_blog_description'] != '' ){ ?> 
                    <div class="col-md-12">
                        <div class="section-title">
                            <?php if ($vdequator_current_options['recent_blog_title'] != '') { ?> 
                                <h1 class="section-heading"><?php echo wp_kses_post($vdequator_current_options['recent_blog_title']); ?></h1>
                            <?php } if ($vdequator_current_options['recent_blog_description'] != '') { ?>
                                <p><?php echo esc_html($vdequator_current_options['recent_blog_description']); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <div class="row" id="grid-view">
                    <?php
                    $vdequator_args = array('post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => get_option("sticky_posts"));
                    query_posts($vdequator_args);
                    if (query_posts($vdequator_args)) {
                        while (have_posts()):the_post();
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <article class="post"> 
                                    <figure class="post-thumbnail">
                                        <?php
                                        $vdequator_defalt_arg = array('class' => "img-responsive");
                                        if (has_post_thumbnail()):
                                            the_post_thumbnail('', $vdequator_defalt_arg);
                                        endif;
                                        ?>
                                    </figure>
                                    <aside class="grid-content">
                                        <?php if ($vdequator_current_options['home_recentblog_meta_enable'] == 'on') { ?>
                                            <div class="entry-meta">
                                                <span class="entry-date"><a href="<?php echo esc_url(home_url('/')); ?><?php echo esc_html(date('Y/m', strtotime(get_the_date()))); ?>"><time datetime=""><?php echo esc_html(get_the_date()); ?></time></a></span>
                                                <span class="comments-link"><?php comments_popup_link(esc_html__('Leave a Reply', 'vdequator')); ?></span>
                                                <?php if (get_the_tags()) { ?>
                                                    <span class="tag-links"><?php the_tags('', ', ', ''); ?></span>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                        <div class="entry-header">
                                            <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        </div>
                                        <div class="entry-content">
                                            <p><?php the_content(__('Read More', 'vdequator')); ?></p>
                                        </div>
                                    </aside>                       
                                </article>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    } else {
                        ?>
                        <div class='post_message'>
                            <?php esc_html_e('No Posts to show.', 'vdequator'); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <?php
    }

endif;

/**
 * default blog Layout
 */
if (!function_exists('vdequator_blog_default_layout')) :

    function vdequator_blog_default_layout() {
        $vdequator_current_options = wp_parse_args(get_option('busiprof_theme_options', array()), vdequator_default_data());
        ?>
        <section id="section" class="home-post-latest">
            <div class="container">	

                <div class="row">
                <?php if ($vdequator_current_options['recent_blog_title'] != '' || $vdequator_current_options['recent_blog_description'] != '' ){ ?> 
                    <div class="col-md-12">
                        <div class="section-title">
                            <?php if ($vdequator_current_options['recent_blog_title'] != '') { ?> 
                                <h1 class="section-heading"><?php echo wp_kses_post($vdequator_current_options['recent_blog_title']); ?></h1>
                            <?php } if ($vdequator_current_options['recent_blog_description'] != '') { ?>
                                <p><?php echo esc_html($vdequator_current_options['recent_blog_description']); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                </div>

                <div class="row">
                    <?php
                    $vdequator_args = array('post_type' => 'post', 'posts_per_page' => 4, 'post__not_in' => get_option("sticky_posts"));
                    query_posts($vdequator_args);
                    if (query_posts($vdequator_args)) {
                        while (have_posts()):the_post(); {
                                ?>
                                <div class="col-md-6">
                                    <div class="post"> 
                                        <div class="media"> 
                                            <figure class="post-thumbnail"><?php $vdequator_defalt_arg = array('class' => ""); ?>
                                                <?php if (has_post_thumbnail()) { ?>
                                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('', $vdequator_defalt_arg); ?></a>
                                                <?php } ?>
                                            </figure> 
                                            <div class="media-body">
                                                <?php if ($vdequator_current_options['home_recentblog_meta_enable'] == 'on') { ?>
                                                    <div class="entry-meta">
                                                        <span class="entry-date"><a href="<?php echo esc_url(home_url('/')); ?><?php echo esc_html(date('Y/m', strtotime(get_the_date()))); ?>"><time datetime=""><?php echo esc_html(get_the_date()); ?></time></a></span>
                                                        <span class="comments-link"><?php comments_popup_link(esc_html__('Leave a Reply', 'vdequator')); ?></span>
                                                        <?php if (get_the_tags()) { ?>
                                                            <span class="tag-links"><?php the_tags('', ', ', ''); ?></span>
                                                        <?php } ?>
                                                    </div>
                                                <?php } ?>


                                                <div class="entry-header">
                                                    <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                </div>
                                                <div class="entry-content">
                                                    <p><?php the_content(__('Read More', 'vdequator')); ?></p>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <?php
                            } endwhile;
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- /Blog Post -->
        <div class="clearfix"></div>
        <?php
    }





endif;