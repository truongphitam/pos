<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no"
    <!-- Favicon Icon -->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.png">
    <?php wp_head(); ?>
</head>

<body>
<div class="cs-preloader cs-white_bg cs-center" style="display: none;">
    <div class="cs-preloader_in" style="display: none;">
        <img src="<?php echo get_template_directory_uri() ?>/img/logo_mini.svg" alt="Logo">
    </div>
</div>
<!-- Start Header Section -->
<header class="cs-site_header cs-style1 cs-sticky-header cs-primary_color cs-white_bg">
    <div class="cs-main_header">
        <div class="container">
            <div class="cs-main_header_in">
                <div class="cs-main_header_left">
                    <a class="cs-site_branding cs-accent_color" href="/">
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Logo">
                    </a>
                </div>
                <div class="cs-main_header_center">
                    <div class="cs-nav">
                        <?php
                        $args = array(
                            'menu_class' => 'cs-nav_list',
                            'menu_id' => '',
                            'container'=>false,
                        );
                        wp_nav_menu( $args );
                        ?>
                        <span class="cs-munu_toggle">
                            <span></span>
                        </span>
                    </div>
                </div>
                <div class="cs-main_header_right">
                    <div class="cs-toolbox">
                        <span class="cs-btn cs-color1 cs-modal_btn" data-modal="register"><span>Liên hệ</span></span>
                        <span class="cs-link cs-modal_btn" data-modal="login">VI</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Section -->