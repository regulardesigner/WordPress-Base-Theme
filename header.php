<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><html <?php language_attributes(); ?> class="no-js"><![endif]-->
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <!-- Title -->
        <title><?php wp_title ( '|', true,'right' ); ?></title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.png">
        <!-- Pingback -->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <!-- jQuery -->
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/modernizr.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>

        <!-- Bootstrap -->
        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <!-- Main CSS -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /> 
        <?php
            /* 
             *  Add this to support sites with sites with threaded comments enabled.
             */
            if ( is_singular() && get_option( 'thread_comments' ) )
                wp_enqueue_script( 'comment-reply' );
            wp_head();
            wp_get_archives('type=monthly&format=link');
        ?>
    </head>
<body>
 
<div id="wrapper" class="container">
    <header class="container">
        <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
        <nav class="navbar">
        <?php 
            $args = array(
                'theme_location'  => 'main-menu',
                'container'       => 'div',
                'container_class' => 'navbar-inner',
                'menu_class'      => 'nav navbar-nav',
                'menu_id'         => '',
                'echo'            => true,
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
            );

            wp_nav_menu( $args );
        ?>
    </nav>
    </header><!-- End header -->