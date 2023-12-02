<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <style>
        .container-loader {
            background: white;
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: 10000;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 1s;
        }

        .squiggle {
            --stroke-dashoffset: 1000;
            stroke-dasharray: 1000;
            stroke-dashoffset: var(--stroke-dashoffset);
            animation: draw 3s ease-in-out infinite;
            fill: transparent;
            transition: all .5s;
            width: 20vw;
        }

        @keyframes draw {
            0% {
                fill: transparent;
                stroke-dashoffset: 1000;
            }

            75% {
                fill: transparent;

            }

            100% {
                fill: #462039;
                stroke-dashoffset: 0;

            }
        }
    </style>


    <link rel="apple-touch-icon" sizes="144x144" href="<?= get_template_directory_uri() ?>/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri() ?>/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= get_template_directory_uri() ?>/images/favicon/safari-pinned-tab.svg" color="#2b1125">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
</head>

<body>
    <script src="https://www.kalendes.com/widget/widget.js?onload=kalendesLoaded" type="text/javascript"></script>

    <script>
        /*<![CDATA[*/
        kalendes_host = "sandrinef-bien-etre"; /*]]>*/
    </script>
    <div id="kalendes-widget-container"></div>


    <main id="main">

        <div id="container-loader" class="container-loader">
            <!-- Generator: Adobe Illustrator 23.0.5, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
            <svg version="1.1" class="squiggle" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150.1 105.2" style="enable-background:new 0 0 150.1 105.2;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        stroke: #462039;
                    }
                </style>
                <path class="st0" d="M49.2,90.5L64.6,97L9.3,96.4C7.5,96.3,6,94.8,6,93l0,0c0-1.8,1.5-3.3,3.3-3.3l26.9,0.3
                C25.2,81.5,9,63.6,8.9,31.9l0-3.6l3.6,0.3c0.6,0.1,13.9,1.3,28.6,10.3c2.2,1.4,4.6,3,7,4.8l-0.1,8.6C35.6,41.2,22,37.2,15.6,35.8
                C17.7,76.6,48.9,90.3,49.2,90.5z M140.8,96.4L85.5,97l15.4-6.5c1.3-0.6,31.6-14.1,33.6-54.6c-4.7,1-13.3,3.4-22.3,8.9
                c-4.7,2.9-9,6.3-12.8,10.1l-7.4,8.9c-5.6,8-9.7,17.4-12.3,28.1c5.2-6.2,9-14.1,11.2-22.8l8.2-9.3c-1.7,18.1-9.8,34.5-22.1,43.9
                l-2,1.5l-2-1.5c-13.4-10.2-21.9-28.9-22.5-49l0.3-8.8c1.6-18.3,9.8-34.8,22.2-44.2l2-1.5l2,1.5c11.9,9,19.9,24.6,21.9,42L92.7,49
                c-0.8-16.5-7.5-31.5-17.8-40.6c-11,9.5-17.7,25.8-17.9,43.4l0.8,11.4c1.8,11.3,6.3,21.6,12.9,29.2c-2.4-10.2-6-18.6-10.4-25.5
                l-1-12.6c6.2,7.3,11.9,16.8,15.8,29.2c4.3-13.6,10.8-23.8,17.7-31.3l6.3-6.1c3.4-2.9,6.7-5.2,9.8-7.1c14.8-9,28.1-10.3,28.6-10.3
                l3.6-0.3l0,3.6c-0.1,31.7-16.2,49.6-27.3,58.1l26.9-0.3c1.8,0,3.3,1.4,3.3,3.3l0,0C144.1,94.8,142.6,96.3,140.8,96.4z" />
            </svg>
        </div>

        <div class="container-fluid navbar">
            <nav class="container content-navbar">

                <div class="container-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="link-logo">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                        ?>
                        <img class="logo" src="<?php echo $image[0]; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">

                    </a>
                </div>

                <div class="menu-toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>

                <div class="container-menu">

                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'menu_class' => 'menu',
                        'walker' => new Custom_Walker()
                    )); ?>


                    <ul class="icons-shop">

                        <li class="menu-item menu-item-icon account-icon">
                            <div id="account-button">
                                <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.25 20.9173C1.25 16.0848 5.16751 12.1673 10 12.1673C14.8325 12.1673 18.75 16.0848 18.75 20.9173M14.0833 5.16732C14.0833 7.42248 12.2552 9.25065 10 9.25065C7.74484 9.25065 5.91667 7.42248 5.91667 5.16732C5.91667 2.91216 7.74484 1.08398 10 1.08398C12.2552 1.08398 14.0833 2.91216 14.0833 5.16732Z" stroke-width="1.16667" stroke-linecap="round"></path>
                                </svg>
                            </div>
                        </li>

                        <!-- // Icône de panier -->
                        <li class="menu-item menu-item-icon cart-icon" id="cart-button">
                            <div>
                                <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.916016 1.08398H3.24935L4.18268 5.75065M4.18268 5.75065L6.04935 15.084H17.9493L19.5827 5.75065H4.18268ZM17.8327 19.1673C17.8327 20.1338 17.0492 20.9173 16.0827 20.9173C15.1162 20.9173 14.3327 20.1338 14.3327 19.1673C14.3327 18.2008 15.1162 17.4173 16.0827 17.4173C17.0492 17.4173 17.8327 18.2008 17.8327 19.1673ZM9.66601 19.1673C9.66601 20.1338 8.88251 20.9173 7.91602 20.9173C6.94952 20.9173 6.16602 20.1338 6.16602 19.1673C6.16602 18.2008 6.94952 17.4173 7.91602 17.4173C8.88251 17.4173 9.66601 18.2008 9.66601 19.1673Z" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <span id="badge-nb-items-cart">
                                
                            </span>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>