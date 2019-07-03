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
            <div class="header-phone">
                <div class="header-content">
                    <div class="header-content_element">
                        <div id="nav_toggle">
                            <div>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <nav>
                            <ul>
                                <li><a href="<?php echo esc_url(home_url("/"));?>/menu1"><img
                                            src="<?php bloginfo('template_directory'); ?>/image/menu1.png" alt="">
                                        <p>ご利用案内</p>
                                    </a></li>
                                <li><a href="<?php echo esc_url(home_url("/"));?>/menu2"><img
                                            src="<?php bloginfo('template_directory'); ?>/image/menu2.png" alt="">
                                        <p>施設サイト紹介</p>
                                    </a></li>
                                <li><a href="<?php echo esc_url(home_url("/"));?>/menu3"><img
                                            src="<?php bloginfo('template_directory'); ?>/image/menu3.png" alt="">
                                        <p>アクセス</p>
                                    </a></li>
                                <li><a href="<?php echo esc_url(home_url("/"));?>/menu4"><img
                                            src="<?php bloginfo('template_directory'); ?>/image/menu4.png" alt="">
                                        <p>イベント紹介</p>
                                    </a></li>
                                <li><a href="<?php echo esc_url(home_url("/"));?>/category/news"><img
                                            src="<?php bloginfo('template_directory'); ?>/image/menu5.png" alt="">
                                        <p>お知らせ</p>
                                    </a></li>
                                <li><a href="<?php echo esc_url(home_url("/"));?>/menu5"><img
                                            src="<?php bloginfo('template_directory'); ?>/image/menu6.png" alt="">
                                        <p>周辺紹介</p>
                                    </a></li>
                                <li><a href="<?php echo esc_url(home_url("/"));?>/blog"><img
                                            src="<?php bloginfo('template_directory'); ?>/image/menu7.png" alt="">
                                        <p>ブログ</p>
                                    </a></li>
                            </ul>
                        </nav>

                    </div>
                    <div class="header-content_element">
                        <a href="<?php echo esc_url(home_url("/"));?>"><img
                                src="<?php bloginfo('template_directory'); ?>/image/logo.png" alt=""></a>
                    </div>
                    <div class="header-content_element">
                        <div class="reservation-btn"><a href="https://www.nap-camp.com/yamanashi/11247/">予約はこちら</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="header-PC">
                <div class="PC-wrapper">
                    <div class="PC-content">
                        <div class="PC-content_logo">
                            <a href="<?php echo esc_url(home_url("/"));?>"><img
                                    src="<?php bloginfo('template_directory'); ?>/image/logo-PC.png" alt=""></a>
                        </div>
                        <div class="PC-content_menu">
                            <ul>
                                <li><a href="<?php echo esc_url(home_url("/"));?>/menu1"><img
                                            src="<?php bloginfo('template_directory'); ?>/image/menu1.png" alt="">
                                        <p>ご利用案内</p>
                                    </a></li>
                                <li><a href="<?php echo esc_url(home_url("/"));?>/menu2"><img
                                            src="<?php bloginfo('template_directory'); ?>/image/menu2.png" alt="">
                                        <p>施設サイト紹介</p>
                                    </a></li>
                                <li><a href="<?php echo esc_url(home_url("/"));?>/menu3"><img
                                            src="<?php bloginfo('template_directory'); ?>/image/menu3.png" alt="">
                                        <p>アクセス</p>
                                    </a></li>
                                <li><a href="<?php echo esc_url(home_url("/"));?>/nenu4"><img
                                            src="<?php bloginfo('template_directory'); ?>/image/menu4.png" alt="">
                                        <p>イベント紹介</p>
                                    </a></li>
                                <li><a href="<?php echo esc_url(home_url("/"));?>/category/news"><img
                                            src="<?php bloginfo('template_directory'); ?>/image/menu5.png" alt="">
                                        <p>お知らせ</p>
                                    </a></li>
                                <li><a href="<?php echo esc_url(home_url("/"));?>/menu5"><img
                                            src="<?php bloginfo('template_directory'); ?>/image/menu6.png" alt="">
                                        <p>周辺紹介</p>
                                    </a></li>
                                <li><a href="<?php echo esc_url(home_url("/"));?>/blog"><img
                                            src="<?php bloginfo('template_directory'); ?>/image/menu7.png" alt="">
                                        <p>ブログ</p>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="PC-content_btn">
                            <div class="reservation-btn"><a href="https://www.nap-camp.com/yamanashi/11247/">予約はこちら</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display')) { bcn_display(); }?>
            </div>


        </header>

        <script src="jquery.js"></script>
        <script>
        $(function() {
            $('#nav_toggle').click(function() {
                $("header").toggleClass('open');
                $("nav").fadeToggle(500);
            });

        });
        </script>