<?php get_header(); ?>

<div id="home-page" class="content-page">
    <section id="header-home-page" class="container-fluid header reveal-parent">
        <div class="container container-content-header">
            <div class="row align-items-center">

                <div class="col-12 col-lg-5 content-header">
                    <?php $adress = get_field('adresse', 'option'); ?>

                    <span class="content-header__adress"><?= $adress['adresse'] . ', ' . $adress['code_postal']; ?></span>
                    <h1 class="content-header__title">Sandrine F Bien-être, Massage à Besançon</h1>
                    <p class="content-header__text">En toute simplicité et dans un environnement apaisant, je vous accueille pour un moment qui vous sera entièrement dédié, une bulle bien-être afin de prendre soin de vous dans un cadre reposant à l’ambiance zen, cocooning et serein.</p>
                    <div class="content-header_container-btn">
                        <a href="#services-home" class="content-header__btn btn">Voir les services</a>
                        <button id="mon-super-btn" class="content-header__btn btn btn-outline btn-gift-card">Offrir une séance</button>
                    </div>

                    <div class="content-header__contact-infos">
                        <a target="_blank" href="https://www.facebook.com/Sandrine-F-bien-%C3%AAtre-370938657108803/" class="contact-infos-item">
                            <span class="contact-infos-item__container-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                            </span>
                            <?php the_field('numero_de_telephone', 'option'); ?>
                        </a>


                        <a target="_blank" href="https://www.facebook.com/Sandrine-F-bien-%C3%AAtre-370938657108803/" class="contact-infos-item">
                            <span class="contact-infos-item__container-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg>
                            </span>
                            <?php the_field('adresse_email', 'option'); ?>
                        </a>
                    </div>


                </div>

                <div class="col-12 col-lg-6 offset-lg-1 image-hero">

                    <div class="img-container-outline">
                        <div class="img-container">
                            <div class="img-overlay"></div>
                            <div class="img-content">
                                <img class="image-hero__background" src="<?= get_template_directory_uri() ?>/images/header-homepage.jpg" alt="">
                            </div>
                            <div class="img-outline"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- <section id="presentation-section" class="container-fluid section">
        <div class="container">


            <div class="section__text-col">
                <h2 class="section__title">Une large gamme de soins et de massages à Besançon</h2>
                <img class="divider" src="<?= get_template_directory_uri() ?>/images/divider.svg" alt="">
                <p class="section__text">
                    Sandrine, 45 ans, praticienne dans le bien-être.
                    Après plusieurs formations en école de massage et auprès de thérapeutes, je vous propose de nombreux Massages détentes ou Soins énergétiques, de l’aromathérapie ainsi qu’une gamme de produits bien-être 100% Naturel. De nature empathique et pratiquant par passion, je me ferais un plaisir de vous offrir un moment de calme et de douceur dans ce monde où tout doit aller toujours plus vite.
                </p>

                <div class="container-animated-arrow">
                    <a class='animated-arrow' href='/a-propos-de-moi/'>
                        <span class='the-arrow -left'>
                            <span class='shaft'></span>
                        </span>
                        <span class='main'>
                            <span class='text'>
                                En savoir plus
                            </span>
                            <span class='the-arrow -right'>
                                <span class='shaft'></span>
                            </span>
                        </span>
                    </a>
                </div>

                <div class="row g-4 g-md-5 justify-content-center container-atouts">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="container-atouts__item ">

                            <span class="container-atouts__item__icon-container">
                                <img src="<?= get_template_directory_uri() ?>/images/massage-du-visage.png" alt="">
                            </span>

                            <div class="container-atouts__item__text">
                                Bienveillance
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="container-atouts__item ">

                            <span class="container-atouts__item__icon-container">
                                <img src="<?= get_template_directory_uri() ?>/images/massage-corporel.png" alt="">
                            </span>

                            <div class="container-atouts__item__text">
                                Douceur
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="container-atouts__item ">

                            <span class="container-atouts__item__icon-container">
                                <img src="<?= get_template_directory_uri() ?>/images/spa.png" alt="">
                            </span>

                            <div class="container-atouts__item__text">
                                Ecoute
                            </div>

                        </div>
                    </div>

                </div>


            </div>


        </div>
    </section> -->

    <section id="services-section" class="container-fluid section">
        <div class="container">

            <h2 class="section__title"> <span class="round-container">U</span>ne large gamme de soins et de massages à Besançon</h2>
            <?php get_template_part('parts/divider'); ?>
            <div id="services-home"></div>

            <p class="section__text">
                Pour profiter pleinement de votre moment détente, je vous propose différents soins qui seront adaptés à vos besoins. Massages détentes ou Soins énergétiques, pratiqués avec des huiles 100% naturelles, offrez-vous un instant de calme et ressourcez-vous le temps d’un soin à Besançon (25). </p>
            <?php get_template_part('parts/list-services'); ?>

        </div>

    </section>


    <?php get_template_part('parts/avantages-section'); ?>



    <section id="evenement-section" class="container-fluid section">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 <?php if (get_field('afficher_une_image_section_evenement', 'option') == true) echo 'col-lg-4'; ?> col-text">
                <div class="col-text__content">


                    <h2 class="section__title"><?php the_field('titre_section_evenement', 'option'); ?></h2>
                    <?php get_template_part('parts/divider'); ?>

                    <?php if (get_field('texte_section_evenement', 'option') == true) { ?>
                        <p class="section__text">
                            <?php the_field('texte_section_evenement', 'option'); ?>
                        </p>
                    <?php } ?>
                    <?php if (get_field('afficher_un_bouton_section_evenement', 'option') == true) { ?>
                        <div class="section__container-btn ">
                            <a target="_blank" href="<?php the_field('lien_du_bouton_section_evenement', 'option'); ?>" class="btn"><?php the_field('texte_du_bouton_section_evenement', 'option'); ?></a>
                        </div>
                    <?php } ?>


                </div>
            </div>
        </div>
        <?php if (get_field('afficher_une_image_section_evenement', 'option') == true) { ?>
            <?php $imageSectionEvent = get_field("image_section_evenement", 'option'); ?>
            <img class="image-section" src="<?= $imageSectionEvent["sizes"]["1536x1536"]; ?>" alt="Illustration de la section" height="512" width="768">

        <?php } ?>
    </section>

    <section id="review-section" class="container section">
        <div class="container">

            <h2 class="section__title">Avis clients</h2>
            <?php get_template_part('parts/divider'); ?>
            <div class="container-slider">
                <ul id="customize-controls">
                    <li class="prev " aria-controls="customize" tabindex="-1" data-controls="prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                        </svg>
                    </li>
                    <li class="next " aria-controls="customize" tabindex="-1" data-controls="next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                        </svg>
                    </li>
                </ul>

                <div id="slider-reviews">


                    <?php
                    /**
                     * Setup query to show the ‘services’ post type with ‘8’ posts.
                     * Output the title with an excerpt.
                     */
                    $argsReviews = array(
                        'post_type' => 'review',
                        'post_status' => 'publish',
                        'posts_per_page' => 2,
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    );

                    $reviews = new WP_Query($argsReviews);


                    while ($reviews->have_posts()) : $reviews->the_post();

                    ?>

                        <div class="item-review">

                            <div class="item-review__content">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 243.48 123.1" class="plante plante-review">
                                    <g id="Objects">
                                        <path class="cls-1" d="M204.59,78.4c3.7-10,3.85-19.14-1.42-28.65-4.41-8-12.15-14-20-18.33a68.75,68.75,0,0,0-26.77-7.89c-9.08-.79-19.49-1.59-28.22,1.55C118.82,28.44,110,34.25,102,40c-4,2.91-8,5.89-12.31,8.42-5.67,3.35-11.43,5-17.85,6.28-6,1.19-13.75,2.56-18.72-2.18-3.36-3.21-4-11.16-2-15.07,2.17-4.08,10.6-13.81,14.39-6.5,3.09,5.95.28,12-4.61,15.73-5.45,4.2-13.16,5.89-20,5.78-7.44-.12-13.15-3.35-17.91-8.94C19,38.67,14.67,33.87,12.78,27.69A38.43,38.43,0,0,1,11,19.09c-.19-3.08.85-6,.62-9.1-.06-.85-2.7-.31-2.63.7.22,3.09-.87,6-.62,9.11a40.5,40.5,0,0,0,2,9.29c1.92,5.81,6,10.21,9.81,14.84C27.49,52.78,36.93,55.21,48,53.22c8.46-1.51,21.19-6.38,21.35-16.73.13-8.2-5.86-12.85-12.87-7.7-3.45,2.54-7.84,7-8.86,11.3-.82,3.47-.17,9.38,2,12.3,6,8.35,20.61,4.36,28.68,2.39,11.81-2.88,21-11.25,30.87-17.86a112.77,112.77,0,0,1,17.24-9.63c7-3.07,14.63-3,22.13-2.67,15.22.59,29.95,4.56,41.91,14.38,5.62,4.61,10.17,10.13,12.6,17.06,2.77,7.91,1.77,15-1.08,22.67-.32.87,2.31.55,2.63-.33Z" />
                                        <path class="cls-1" d="M203.63,75.77c-8.57,2.9-12.81,12.21-14.75,20.32-1.39,5.83-4,18.63,2.71,22.42a2.1,2.1,0,0,0,2.28-.61,9.35,9.35,0,0,0,1.19-3,39.65,39.65,0,0,1,3.17-6.27c2.55-4.45,5.16-8.87,7.5-13.43A22.52,22.52,0,0,0,208.32,85c0-2.39,0-7.46-2.22-9-.76-.55-3.17.51-2.45,1,2.47,1.78,2.17,8.79,1.84,11.17-.57,4-2.5,7.36-4.38,10.88-2,3.69-4.06,7.27-6.09,10.92a40.44,40.44,0,0,0-2.1,3.89c-.55,1.33-.62,2.86-1.51,4l2.28-.61c-5.62-3.14-3.64-14.67-2.64-19.39a47,47,0,0,1,3.29-10.66c1.77-3.69,5.53-8.7,9.64-10.09,1.53-.51,1.22-1.85-.35-1.32Z" />
                                        <path class="cls-1" d="M204.54,74.69c7.61-.09,17.32,2.19,22.87,7.78,5.31,5.35,8.77,15,7.91,22.54l2.37-.8c-1.92-.73-3.48-2.38-5.18-3.51s-3.44-1.88-5.15-2.87a38.85,38.85,0,0,1-9.71-8.37,55,55,0,0,1-7-10c-.41-.82-3.05-6.16-2.37-6.72,1.15-1-1.45-1-2.11-.43-1.48,1.23.44,4.51,1,5.84,1.44,3.51,3.67,6,5.88,9.09A44.68,44.68,0,0,0,223.43,98c1.6,1.12,3.42,1.83,5.1,2.81,2.42,1.41,4.46,3.67,7.06,4.67.59.22,2.27.05,2.37-.81.92-8.21-2.81-18.69-9.09-24.16-6-5.23-15.56-7.41-23.31-7.32-1,0-2.79,1.51-1,1.49Z" />
                                        <path class="cls-1" d="M207.08,74.66l-.06-.24c-.22-.89-2-.19-2.37.13-2.15,1.75-3.08,5.33-4.34,7.75a22.06,22.06,0,0,0-2.62,9.22c-.07,1.07,2.58.56,2.64-.33a21.19,21.19,0,0,1,2.43-8.84c1.05-2,2.17-5.88,4-7.36l-2.38.13.07.24c.22.92,2.86.23,2.63-.7Z" />
                                        <path class="cls-1" d="M206.72,73.91l-.15.1c-.34.22-.64.52-.41.91a19.59,19.59,0,0,0,5.8,6.22,24.93,24.93,0,0,0,4,2.24c1.72.76,3.74,1,5.28,2.1.76.53,3.16-.52,2.45-1-2.41-1.72-5.51-2.12-8.09-3.62a19.3,19.3,0,0,1-7-6.94l-.41.9.16-.1c1.48-1-.79-1.33-1.64-.78Z" />
                                        <path class="cls-1" d="M194.38,38.63C199.66,34.3,206,31.3,213,32.44c4.91.8,11.14,3,15.15,6.06.46-.42.93-.83,1.4-1.24-2.2.29-4.06.17-6.16.88-3.11,1-6,2.7-9.15,3.62-7.37,2.14-13.42.1-19.89-3.27-.76-.4-3.18.7-2.09,1.27,5.79,3,10.77,4.92,17.46,4.3a29.48,29.48,0,0,0,7.33-1.82c4.17-1.51,7.69-2.92,12.14-3.53.27,0,2.12-.69,1.4-1.24-11.73-9.11-27.23-8.38-38.34.73-1.16.95,1.45,1,2.11.43Z" />
                                        <path class="cls-1" d="M192.81,39.16c2.73-.1,5.35-.89,8.08-1a44.09,44.09,0,0,1,10.82.63c.84.16,3.1-1.14,1.61-1.43a45.68,45.68,0,0,0-9.78-.74c-3.29,0-6.44.95-9.7,1.06-1,0-2.79,1.56-1,1.5Z" />
                                        <path class="cls-1" d="M175,30.76c-1.52,3.24-3.7,5.92-4.75,9.4a40.82,40.82,0,0,0-1.55,9.7c-.26,5.51,1.43,11.15,2.46,16.54.2,1,2.39.08,2.64-.52,3-7.46,9.74-14.11,9.94-22.52.12-5-1.05-7.93-3.21-12.34-.86-1.74-1.21-3.2-3.34-3.3-1,0-2.8,1.4-1,1.49,1.17.06,3.6,5.77,4,6.86,1.4,3.42,1.29,8.49.16,12-2.11,6.52-6.63,11.84-9.2,18.17l2.64-.52c-1.11-5.76-2.85-11.74-2.35-17.64a37.33,37.33,0,0,1,1.69-9c1.09-3.22,3.09-5.67,4.5-8.66.36-.78-2.24-.52-2.64.33Z" />
                                        <path class="cls-1" d="M176.73,29.53A97.74,97.74,0,0,1,175,47.82c-.18,1,2.47.57,2.64-.33a100.06,100.06,0,0,0,1.77-18.67c0-.81-2.63-.32-2.63.71Z" />
                                        <path class="cls-1" d="M151.65,23.85c-2.31-4.76.69-10.33,4.21-13.67,2.64-2.51,5.53-3.71,8.95-4.86,1.3-.44,4.47-1.84,4.63-.57.1.83-2.17,4-2.56,4.75a38.1,38.1,0,0,1-3.09,5.22c-3.41,4.73-6.43,9.48-12.95,9.44-1,0-2.8,1.48-1,1.5A15.09,15.09,0,0,0,163,19.16c3.68-4.92,7.6-10.39,10-16,.12-.29-.29-.52-.51-.55C167.08,2,160.16,4.77,155.91,8c-4.74,3.55-9.88,10.45-6.9,16.59.44.9,3,.07,2.64-.7Z" />
                                        <path class="cls-1" d="M151.91,25.29c1.24-2.41,3-4.47,4.41-6.78a23.19,23.19,0,0,1,2-3.05,13.56,13.56,0,0,0,2.17-2.61c.56-1.11-2.06-.82-2.45,0a13.63,13.63,0,0,1-2.12,2.5,26,26,0,0,0-2,3.16c-1.4,2.31-3.16,4.36-4.4,6.78-.57,1.11,2,.82,2.45.05Z" />
                                    </g>
                                </svg>

                                <p class="item-review__content__text ">
                                    "<?= the_field("avis"); ?>"
                                </p>
                                <?php if (get_field("nom") == true) { ?>

                                    <p class="item-review__content__name ">
                                        <?= the_field("nom"); ?>
                                    </p>
                                <?php } ?>

                                <div class="item-review__content__icon ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                                        <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                                    </svg>
                                </div>
                            </div>

                        </div>

                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>


                </div>
            </div>
        </div>


    </section>





    <?php get_template_part('parts/cta-section'); ?>

    <section id="city-section" class="section pb-0">
        <div class="container">
            <h2 class="section__title"> <span class="round-container">A</span> proximité</h2>
            <?php get_template_part('parts/divider'); ?>
            <p class="section__text">
                Venez découvrir un environnement de bien-être à Besançon (25)
            </p>

            <div class="list-city">

                <div class="row justify-content-center">


                    <?php
                    /**
                     * Setup query to show the ‘services’ post type with ‘8’ posts.
                     * Output the title with an excerpt.
                     */
                    $argsCity = array(
                        'post_type' => 'villes',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    );

                    $city = new WP_Query($argsCity);
                    $revealCount = 0;

                    while ($city->have_posts()) : $city->the_post();
                        $revealCount++;
                    ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                            <div class="city city-<?= $revealCount; ?>">
                                <div class="city__content">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill city__icon" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg>

                                    <h3 class="city__name">
                                        <?= the_title(); ?>
                                    </h3>
                                </div>



                            </div>
                        </div>

                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>

                </div>



            </div>
        </div>

        <div id="map-front-page" class="container-fluid">
            <div id="container-map-front-page" class="">

            </div>
        </div>

    </section>

</div>

<?php get_footer(); ?>