<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!--[if lt IE 10]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <![endif]-->
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1">
    <title><?php
        global $page, $paged;
        wp_title('|', true, 'right');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) {
            echo " | $site_description";
        }
        if ($paged >= 2 || $page >= 2) {
            echo ' | ' . sprintf(__('Page %s', 'cTpl'), max($paged, $page));
        }
        ?></title>

    <!--Font CDN-->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/ckd7dvg.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <!--End Font CDN-->

    <link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>?ver=<?php echo rand(); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/slick.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/homepage.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/contact.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/news.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/page-custom.css">

    <script src="https://kit.fontawesome.com/1ba81f99bb.js" crossorigin="anonymous"></script>
    <?php
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '2.2.4');
    wp_head();
    ?>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/ScrollTrigger.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/gsap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/app.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/slick.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
</head>

<body <?php body_class(); ?>>

    <div class="body-border border-01"></div>
    <div class="border-02"></div>
    <div class="body-border border-03"></div>

<div class="outer">
    <header id="header-menu" class="header-menu">
        <div class="header-nav">
            <div class="header-logo">
                <a href="<?php echo do_shortcode('[homePath]'); ?>">
                    <picture>
                        <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/joe-logo.svg">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/joe-logo.svg" alt="<?php bloginfo('name'); ?>">
                    </picture>
                </a>
            </div><!-- .header-logo -->
            <div class="main-menu">
                <nav class="nav-menu">
                    <ul class="nav-item-list">
                        <li class="menu-item">
                            <a href="/about/"><span>JOEについて</span></a>
                        </li>
                        <li class="menu-item">
                            <a href="/business/"><span>事業紹介</span></a>
                        </li>
                        <li class="menu-item">
                            <a href="/talk/"><span>スペシャルコンテンツ</span></a>
                        </li>
                        <li class="menu-item">
                            <a href="/news/"><span>お知らせ</span></a>
                        </li>
                        <li class="menu-item">
                            <a href="/media/"><span>メディア</span></a>
                        </li>
                    </ul><!-- .nav-item-list -->
                    <div class="contact-menu">
                        <a href="/contact/">
                            <span class="en">Contact</span>
                            <span class="icon-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="5.918" height="10.422" viewBox="0 0 5.918 10.422">
                          <path id="Path_63967" data-name="Path 63967" d="M1267.837,60.546l4.857,4.857-4.857,4.857" transform="translate(-1267.483 -60.192)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1"/>
                        </svg>
                    </span>
                        </a>
                    </div>
                </nav><!-- .nav-items -->
            </div>
            <div class="btn-openMenu">
                <div class="toggle-btn">
                    <span></span>
                </div>
            </div>
        </div><!-- .header-nav -->
    </header><!-- #header-menu -->

    <main role="main">