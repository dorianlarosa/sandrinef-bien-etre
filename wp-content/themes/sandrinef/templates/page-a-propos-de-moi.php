<?php
/*
 * Template Name: Page A propos de moi
 */
get_header();
?>
<!-- PAGE -->

<div id="page-a-propos-de-moi" class="content-page">

    <section id="header-page" class="container-fluid header">
        <div class="container container-content-header">
            <div class="content-header">
                <h1 class="content-header__title "><?php the_title(); ?></h1>
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }
                ?>
            </div>
        </div>
    </section>


    <section id="a-propos-section" class="container-fluid section">
        <div class="container">
            <div>

                <h2 class="section__title"> <span class="round-container">Q</span>ui-suis-je ?</h2>
                <?php get_template_part('parts/divider'); ?>



                <div class="container-texts">

                    <p class="section__text">
                        Bonjour, je me présente, Sandrine, 40 ans et maman de deux beaux enfants. Tout au long de ma carrière j’ai eu la chance d’expérimenter diverses professions. Ces dernières ont toujours été choisies en fonction des métiers qui me passionnaient.</p>
                    <p class="section__text">
                        Adepte des modelages j’ai découvert, il y a quelques années, les soins énergétiques. Ce fut autant un bouleversement qu’une renaissance pour moi. Le bien être en général faisant partie de mes passions, j’ai souhaité le partager.
                    </p>
                    <p class="section__text">
                        De ce fait me voila en nouvelle orientation professionnelle. J’ai effectué différentes formations en commençant par les soins énergétiques puis les massages et enfin l’aromathérapie.
                    </p>
                    <p class="section__text">
                        En me tournant vers cette dernière, je me suis orientée vers des produits 100% naturels pour assurer le bien-être de tous. J’ai pleinement conscience de la pression que nous subissons tous à chaque instant, dans un environnement où l’on nous demande toujours plus de performances. Pour permettre à chacun de trouver un moment de sérénité, je souhaite me mettre a votre service pour vous offrir un moment de détente et de douceur.
                    </p>
                </div>

                <div class="container-plante">
                    <div class="container-image" data-lg-parallax="child" data-lg-parallax-amplitude="2">


                        <img class="presentation-image" src="<?= get_template_directory_uri() ?>/images/image-presentation.jpg" alt="" srcset="">

                        <svg class="plante plante-a-propos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 109.55 207.48">
                            <path class="cls-1" d="m27.18,201.61c8.08,6.88,16.21,3.32,23.61-2.48,9.68-7.6,7.32-22.62,7.33-33.61,0-6.42-1.2-12.78-1.97-19.14-.94-7.79-2.2-15.54-3.14-23.33-1.82-14.94-2.67-30.55.63-45.32,3.57-15.98,10.48-31.51,22.01-43.35,1.07-1.1-1.5-1.06-2.11-.43-10.15,10.42-16.95,23.66-20.89,37.6-4.43,15.64-4.45,31.79-2.76,47.87,1.76,16.73,5.68,33.48,5.58,50.33-.04,7.19.9,16.04-1.76,22.86-1.51,3.88-5.21,6.34-8.54,8.52-5.37,3.51-10.72,3.53-15.53-.57-.7-.6-3.16.42-2.45,1.03h0Z" />
                            <path class="cls-1" d="m60.54,55.08c-1.79-.37-1.72-6.14-1.73-7.12-.04-3.35.43-6.12,1.89-9.16,2.49-5.17,6.17-10.38,10.63-13.99,7.66-6.21,16.24-12.39,19.72-22.06-.88.11-1.76.22-2.63.33-.17,10.06.19,20.79-3.41,30.32-2.16,5.72-6.6,11.71-11.87,14.86-.44.26-13.17,5.7-13.42,4.47-.19-.9-2.83-.25-2.63.71.02.07.03.15.05.22.04.2.33.34.51.36,4.48.66,8.82-1.35,12.91-2.84,5.05-1.84,9.05-5.41,12.23-9.67,8.46-11.33,8.06-25.25,8.29-38.77.02-1.15-2.36-.43-2.63.33-4.64,12.89-18.36,17.83-25.71,28.52-3.3,4.8-6.29,9.3-6.52,15.27-.1,2.58-.61,8.93,2.74,9.63.84.17,3.1-1.12,1.61-1.43h0Z" />
                            <path class="cls-1" d="m90.13,6.66c.1-.16.2-.32.3-.48-.85.05-1.7.09-2.54.14-.97,5.04-3.84,10.36-5.82,15.14-2.09,5.07-5.19,9.48-8.65,13.69-3.09,3.75-6.69,6.69-9.49,10.67-2.56,3.65-4.59,7.59-6.5,11.57-.54,1.13,2.08.84,2.45.06,1.87-3.92,3.96-7.97,6.5-11.57,3.03-4.31,7.11-7.72,10.44-11.84,3.08-3.8,5.74-7.9,7.67-12.41,2.06-4.82,5.04-10.48,6.03-15.64.21-1.1-2.22-.38-2.54.14-.1.16-.2.32-.3.48-.64,1.04,2,.79,2.45.06h0Z" />
                            <path class="cls-1" d="m53.12,97.48c-.81-1.15.13-4.38.45-5.53.89-3.26,2.63-6.57,5.1-8.94,4.39-4.23,10.63-6.64,16.18-8.88,5.99-2.42,12.49-3.04,18.45-5.48,4.97-2.03,9.08-4.83,13.31-8.07-.79-.02-1.58-.03-2.37-.05-.25,2.29-2.44,4.52-3.51,6.5-1.07,2-1.98,4.08-3.05,6.08-2.85,5.38-5.82,10.48-10.34,14.67-4.83,4.49-10.84,7.81-17.22,9.49-2.75.72-5.53.75-8.34,1-3.53.33-6.23-.53-9.42-1.71-.63-.23-2.2-.05-2.37.8-.01.06-.02.12-.03.18-.19,1,2.46.57,2.63-.33.01-.06.02-.12.03-.18-.79.27-1.58.53-2.36.8,2.72,1.01,4.52,2.08,7.52,2.12,3,.04,6.14-.17,9.11-.58,6.18-.84,12.3-3.61,17.41-7.11,5.72-3.92,10.37-9,13.74-15.07,1.84-3.31,3.34-6.79,5.12-10.12,1.11-2.08,3.43-4.48,3.69-6.88.12-1.12-1.99-.34-2.37-.05-7.04,5.4-13.62,8.02-22.19,10.19-5.94,1.5-11.91,3.75-17.34,6.6-4.85,2.55-9.32,5.65-12.06,10.48-1.3,2.29-4.15,8.39-2.24,11.09.51.72,3.06-.16,2.45-1.03h0Z" />
                            <path class="cls-1" d="m54.43,96.41c.31-1.59,6.5-2.05,7.82-2.4,2.72-.72,5.58-1.77,8.04-3.11,5.21-2.85,10.34-6.29,15.18-9.71,4.75-3.36,8.84-6.6,12.9-10.77,1.84-1.89,7.62-6.13,7.3-9.04-.09-.87-2.74-.29-2.63.71.18,1.64-3.59,4.47-4.57,5.49-2,2.09-3.98,4.18-6.06,6.19-4.37,4.22-9.87,7.67-14.98,10.96-5.86,3.77-11.48,6.97-18.31,8.57-1.88.44-6.84.94-7.33,3.45-.19,1,2.46.57,2.63-.33h0Z" />
                            <path class="cls-1" d="m50.37,87.73c-4.48,1.91-12.62-2.89-16.4-5.14-5.2-3.09-8.16-6.45-10.63-11.99-4.48-10-7.61-21.59-5.74-32.67-.88.17-1.76.35-2.63.52,2.04,4.64,3.77,8.68,7.51,12.2,3.69,3.48,8.04,6.04,11.85,9.34,3.69,3.2,6.81,6.37,9.79,10.24,3.21,4.17,6.23,11.03,5.46,16.39-.15,1.03,2.51.57,2.63-.33,1.33-9.29-6.02-19.05-12.61-24.77-3.73-3.24-7.72-6.02-11.53-9.15-5.14-4.23-7.83-8.6-10.47-14.62-.37-.84-2.5-.3-2.63.52-1.15,6.78-.27,14.9,1.35,21.53,1.42,5.84,4.08,12.93,7.78,17.77,3.65,4.78,9.52,7.47,14.91,9.7,3.78,1.56,8.39,3.26,12.4,1.55,1.69-.72.15-1.59-1.04-1.08h0Z" />
                            <path class="cls-1" d="m51.27,85.31c-2.74.52-5.92-3.52-7.77-5.19-1.78-1.61-3.66-3.05-5.18-4.93-2.91-3.6-5.34-7.86-7.85-11.76-2.87-4.45-5.22-9.09-8.39-13.38-1.25-1.69-2.49-3.47-3.23-5.48-.53-1.43-.61-3-1.59-4.22-.56-.7-3.1.21-2.45,1.03,1.24,1.55,1.43,4.14,2.34,5.93.94,1.85,2.07,3.23,3.34,4.86,3.74,4.82,6.45,10.42,9.74,15.54,2.97,4.61,5.63,8.92,9.8,12.55,2.95,2.57,6.5,7.35,10.87,6.51,1.24-.24,2.17-1.8.36-1.46h0Z" />
                            <path class="cls-1" d="m56.25,133.07c3.17-11.92,11.78-17.69,21.61-24.07,3.85-2.5,8.21-4.66,11.53-7.88,3.03-2.94,5.47-6.31,7.66-9.91-.85.11-1.7.22-2.54.33.13,2.46-.75,5.24-1.13,7.67-.41,2.64-.8,5.29-1.34,7.9-1.22,5.89-3.59,10.95-6.74,16.07-3.08,4.98-7.14,9.87-12.64,12.21-4.47,1.9-16.39,3.45-18.2-3.28-.5.36-1,.72-1.5,1.08.06,0,.12-.02.18-.02,1.27-.17,2.19-1.7.36-1.46l-.18.02c-.4.05-1.68.42-1.5,1.08,1.44,5.36,9.16,5.86,13.7,5.62,5.64-.3,11.03-2.66,15.24-6.43,5.26-4.71,9.72-12.04,12.19-18.62,1.51-4.01,2.06-8.39,2.74-12.6.51-3.18,1.61-6.72,1.44-9.94-.05-.93-2.28-.11-2.54.33-3,4.94-6.45,9.32-11.29,12.57-4.52,3.04-9.31,5.69-13.84,8.71-7.75,5.16-13.44,11.91-15.85,20.97-.25.95,2.39.57,2.63-.33h0Z" />
                            <path class="cls-1" d="m55.05,134.79c8.45-3.58,17.97-8.27,23.76-15.71,6.29-8.08,14.01-15.33,18.47-24.71.54-1.14-2.08-.84-2.45-.06-1.82,3.83-4.27,7.54-6.9,10.86-3.03,3.84-6.89,7.13-9.76,11.06-6.1,8.36-14.69,13.45-24.17,17.46-1.69.72-.15,1.59,1.04,1.08h0Z" />
                            <path class="cls-1" d="m52.26,130.59c-5.86,4.45-14.89-.39-20.46-3.2-4.57-2.3-8.96-5.06-12.27-9.02-6.91-8.28-11.27-17.69-14.28-27.94-.85.29-1.69.58-2.54.87,8.72,6.44,18.04,10.37,28.04,14.28,9.56,3.74,19.09,13.32,20.24,23.95.09.87,2.74.29,2.63-.71-1.02-9.42-8.73-18.04-16.65-22.55-4.58-2.61-9.8-3.91-14.65-5.92-6.1-2.52-11.88-6.19-17.17-10.1-.53-.39-2.84-.14-2.54.87,3.73,12.71,9.88,26.32,21.12,34.11,7.87,5.45,21.68,12.59,30.64,5.77,1.18-.9-1.44-.94-2.11-.43h0Z" />
                            <path class="cls-1" d="m51.65,129.78c.58-.54-3.52-2.27-4.03-2.56-1.89-1.08-3.65-2.27-5.59-3.27-5.37-2.76-9.21-6.71-14.09-10.03-4.42-3-8.17-6.44-11.83-10.29-1.94-2.03-3.31-3.4-4.62-5.99-.95-1.86-1.77-3.83-3.13-5.43-.59-.69-3.11.25-2.45,1.03,1.81,2.14,2.47,4.86,3.84,7.24,1.43,2.48,4.34,4.96,6.38,6.97,4.51,4.46,10.09,7.63,14.7,11.92,4.21,3.92,9.97,6.44,14.95,9.26,1.97,1.12,5.83,3.6,8,1.59,1.11-1.03-1.48-1.02-2.11-.43h0Z" />
                        </svg>
                    </div>
                </div>

            </div>
            <div class="container-qualifications">

                <div class="row">

                    <div class="image">
                        <?php
                        /**
                         * Setup query to show the ‘services’ post type with ‘8’ posts.
                         * Output the title with an excerpt.
                         */
                        $argsQualifications = array(
                            'post_type' => 'qualifications',
                            'post_status' => 'publish',
                            'meta_key' => 'annee_d’obtention',
                            'posts_per_page' => -1,
                            'orderby' => 'meta_value_num',
                            'order' => 'DESC'
                        );

                        $qualifications = new WP_Query($argsQualifications);

                        ?>
                    </div>


                    <div class="qualifications-col__content">

                        <h2 class="section__title"> <span class="round-container">M</span>es qualifications</h2>
                        <?php get_template_part('parts/divider'); ?>

                        <ul class="row list-qualifications gx-4 gy-5">


                            <?php
                            /**
                             * Setup query to show the ‘services’ post type with ‘8’ posts.
                             * Output the title with an excerpt.
                             */

                            $countQualifications = 1;
                            while ($qualifications->have_posts()) : $qualifications->the_post();
                                $countQualifications++;
                            ?>

                                <li class="qualification-item col-12 col-md-6 col-lg-4" data-id="<?= the_ID(); ?>">
                                    <img src="<?= get_field("image")["sizes"]["medium_large"]; ?>" alt="">
                                    <div><?= get_field("annee_d’obtention") . " - " . get_the_title(); ?></div>

                                </li>

                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
</div>

</section>



</div>
<!-- END PAGE -->

<?php get_footer(); ?>