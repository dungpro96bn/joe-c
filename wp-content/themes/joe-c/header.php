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
    <script>
        (function(d) {
            var config = {
                    kitId: 'awg6uyv',
                    scriptTimeout: 3000,
                    async: true
                },
                h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>
    <link rel="stylesheet" href="https://use.typekit.net/ckd7dvg.css">
    <!--End Font CDN-->

    <link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>?ver=<?php echo rand(); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '2.2.4');
    wp_head();
    ?>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.cookie.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/css-vars-ponyfill.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/ajaxzip3.js"></script>
</head>

<body <?php body_class(); ?>>
<div class="outer">
    <header id="header-menu" class="header-menu">
        <div class="header-nav">
            <p class="header-logo">
                <a href="<?php echo do_shortcode('[homePath]'); ?>">
                    <picture>
                        <source media="(max-width: 959px)"
                                srcset="<?php echo do_shortcode('[uploadPath]'); ?>logo_sp.png 2x">
                        <source media="(min-width: 960px)"
                                srcset="<?php echo do_shortcode('[uploadPath]'); ?>logo_pc.png 2x">
                        <img class="sizes" src="<?php echo do_shortcode('[uploadPath]'); ?>logo_pc.png"
                             alt="<?php bloginfo('name'); ?>">
                    </picture>
                </a>
            </p><!-- .header-logo -->
            <nav class="nav-items modal-menu modal-off">
                <div class="nav-item-list">

                </div><!-- .nav-item-list -->
            </nav><!-- .nav-items -->
        </div><!-- .header-nav -->
    </header><!-- #header-menu -->

    <main role="main">