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
<svg height="64px" width="64px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.2 -51.2 614.40 614.40" xml:space="preserve" fill="" stroke="" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#2b1125;} </style> <g> <path class="st0" d="M508.662,257.73c-7.712-8.374-17.751-14.315-28.908-18.126c-11.058-3.722-23.423-5.396-36.424-5.396 c-7.068,0-14.405,0.466-21.848,1.486c1.86-10.683,2.881-21.742,2.881-32.891c0-19.799-3.15-40.064-10.316-60.231l-2.415-6.774 l-7.158,0.555c-30.295,2.595-58.82,12.634-84.104,27.602c-12.364-26.769-39.46-59.864-64.36-73.894 c-24.909,14.03-52.014,47.124-64.378,73.894c-25.283-14.968-53.808-25.007-84.103-27.602l-7.158-0.555l-2.416,6.774 c-7.158,20.167-10.316,40.432-10.316,60.231c0,11.149,1.02,22.208,2.881,32.891c-7.443-1.02-14.78-1.486-21.84-1.486 c-13.009,0-25.374,1.673-36.432,5.396c-11.157,3.811-21.196,9.752-28.908,18.126L0,261.346l1.117,4.84 c13.565,58.918,41.632,98.688,78.898,122.854c37.265,24.248,82.806,32.898,131.595,32.898c12.92,0,26.117-0.652,39.403-1.771 c0.343,0.082,4.612,0.058,4.995,0.082c0.358-0.024,4.636,0,4.978-0.082c13.286,1.118,26.484,1.771,39.403,1.771 c48.798,0,94.33-8.65,131.604-32.898c37.257-24.166,65.324-63.937,78.888-122.854l1.118-4.84L508.662,257.73z M342.487,261.534 c-0.93-27.325-5.754-55.025-14.96-80.211c21.75-13.189,45.908-22.296,71.372-25.554c4.742,15.8,6.88,31.512,6.88,47.034 c0,12.356-1.396,24.526-3.812,36.424c-1.485,6.97-3.346,13.851-5.484,20.633c-5.672,17.465-13.565,34.205-22.95,49.442 c-14.217,23.236-31.691,43.206-48.977,58.085c10.782-23.978,16.821-53.718,17.841-84.756c0.187-3.534,0.278-7.06,0.278-10.594 C342.675,268.602,342.584,265.067,342.487,261.534z M113.101,155.769c25.463,3.257,49.622,12.365,71.372,25.554 c-9.206,25.186-14.029,52.886-14.96,80.211c-0.098,3.533-0.188,7.068-0.188,10.503c0,3.534,0.09,7.06,0.278,10.594 c1.02,31.038,7.06,60.778,17.849,84.756c-17.294-14.878-34.767-34.849-48.985-58.085c-9.385-15.237-17.278-31.977-22.95-49.442 c-2.138-6.782-3.999-13.663-5.484-20.633c-2.416-11.899-3.812-24.068-3.812-36.424C106.221,187.281,108.36,171.57,113.101,155.769z M90.151,373.419c-31.887-20.804-56.42-53.898-69.708-106.401c4.832-4.179,10.774-7.443,17.744-9.76 c8.741-2.971,19.065-4.456,30.491-4.456c8.276,0,17.098,0.742,26.207,2.415c9.663,36.156,28.434,68.768,49.908,94.967 c15.89,19.244,33.168,35.046,50.086,46.202c3.901,2.596,7.811,4.922,11.622,6.881C161.891,402.702,121.932,394.239,90.151,373.419z M284.312,392.198c-0.277,0.18-0.555,0.466-0.832,0.654c-5.762,4.366-11.899,7.149-18.592,8.358 c-0.457,0.098-0.832,0.098-1.298,0.196h-0.367c-0.376,0.089-0.841,0.089-1.306,0.18c0,0,0,0-0.098,0 c-0.628,0.048-5.158,0.082-5.811,0.114c-0.654-0.032-5.191-0.066-5.828-0.114c-0.089,0-0.089,0-0.089,0 c-0.474-0.09-0.939-0.09-1.315-0.18h-0.367c-0.466-0.098-0.832-0.098-1.298-0.196c-6.692-1.208-12.822-3.992-18.592-8.358 c-0.278-0.188-0.547-0.474-0.832-0.654c-11.899-9.385-22.118-26.108-29.088-47.303c-4.929-14.87-8.178-31.879-9.663-49.818 c-0.653-7.524-1.029-15.148-1.029-22.949v-0.09c0-27.137,4.098-55.016,12.455-80.023c1.396-4.179,2.889-8.178,4.464-12.079 c0.833-1.951,1.673-3.901,2.604-5.852c10.308-23.137,29.609-47.964,48.577-60.134c18.95,12.169,38.252,36.996,48.56,60.134 c0.93,1.951,1.771,3.901,2.603,5.852c1.584,3.901,3.069,7.9,4.464,12.079c8.357,25.007,12.455,52.886,12.455,80.023v0.09 c0,7.802-0.376,15.425-1.029,22.949c-1.485,17.939-4.733,34.948-9.662,49.818C306.43,366.09,296.211,382.813,284.312,392.198z M421.849,373.419c-31.78,20.82-71.74,29.283-116.35,29.847c3.82-1.959,7.721-4.285,11.622-6.881 c16.919-11.156,34.197-26.957,50.086-46.202c21.474-26.199,40.245-58.812,49.908-94.967c9.108-1.673,17.93-2.415,26.214-2.415 c11.426,0,21.742,1.485,30.483,4.456c6.97,2.317,12.911,5.582,17.743,9.76C478.269,319.521,453.735,352.615,421.849,373.419z"></path> </g> </g></svg>
                <div class="container-menu">

                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'menu_class' => 'menu',
                        'walker' => new Custom_Walker()
                    )); 
                    
                    // wp_nav_menu(array('theme_location' => 'mon-menu-personnalise','menu_class' => 'menu'));

                    
                    ?>


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