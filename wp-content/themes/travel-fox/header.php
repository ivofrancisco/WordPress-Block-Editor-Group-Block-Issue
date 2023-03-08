<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- BEGIN: TOP BAR
        ==================================================== -->
    <div class="g-topbar">
        <!-- Begin: g-container-lg -->
        <div class="g-container-lg">
            <!-- BEGIN: TOP BAR BRAND -->
            <div class="s-topbar-brand">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_theme_file_uri('/images/logo.svg') ?>" alt="Travel Fox - A Wordpress Blog Theme" />
                </a>
            </div>
            <!-- END: TOP BAR BRAND  -->

            <!-- BEGIN: TOP BAR NAV -->
            <div class="s-topbar-nav">
                <?php

                wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation'
                ));
                ?>
            </div>
            <!-- END: TOP BAR NAV  -->

            <!-- BEGIN: TOP BAR SEARCH  -->
            <div class="s-topbar-search">
                <ul>
                    <li>
                        <a href="<?php echo esc_url(site_url('/search-query')); ?>" class="search-trigger js-search-trigger">
                            <i class="icon-search_03"></i>
                        </a>
                        <!-- <a href="" class="search-trigger js-search-trigger">
                            <i class="icon-search_03"></i>
                        </a> -->
                    </li>
                </ul>
            </div>
            <!-- END: TOP BAR SEARCH  -->
        </div>
        <!-- End: g-container-lg -->
    </div>
    <!-- END: TOP BAR -->