<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/menu.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick-theme.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slide.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    </head>

    <body>
        <header>
            <div class="header2-wrapper">
                <div class="header2-content_logo">
                    <img src="<?php bloginfo('template_directory'); ?>/image/logo-PC.png" alt="">
                </div>
                <div class="header2-content_btn">
                    <div class="reservation-btn"><a href="https://www.nap-camp.com/yamanashi/11247/">予約はこちら</a></div>
                </div>
            </div>
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display')) { bcn_display(); }?>
            </div>
        </header>