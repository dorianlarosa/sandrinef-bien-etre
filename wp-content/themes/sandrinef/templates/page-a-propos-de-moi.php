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
            <div class="content-header reveal">
                <h1 class="content-header__title reveal-1"><?php the_title(); ?></h1>
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs" class="reveal-2">', '</p>');
                }
                ?>
            </div>
        </div>
    </section>


    <section id="a-propos-section" class="container-fluid section">
        <div class="container ">
            <div class="reveal">


                <h2 class="section__title reveal-2">Qui-suis-je ?</h2>
                <img class="divider reveal-3" src="<?= get_template_directory_uri() ?>/images/divider.svg" alt="">
                <p class="section__subtitle reveal-4">
                    Quelques mots sur moi
                </p>
                <p class="section__text reveal-5">
                Bonjour, je me présente, Sandrine, 40 ans et maman de deux beaux enfants. Tout au long de ma carrière j’ai eu la chance d’expérimenter diverses professions. Ces dernières ont toujours été choisies en fonction des métiers qui me passionnaient.</p>
                <p class="section__text reveal-5">
                Adepte des modelages j’ai découvert, il y a quelques années, les soins énergétiques. Ce fut autant un bouleversement qu’une renaissance pour moi. Le bien être en général faisant partie de mes passions, j’ai souhaité le partager.
                </p>
                <p class="section__text reveal-5">
                De ce fait me voila en nouvelle orientation professionnelle. J’ai effectué différentes formations en commençant par les soins énergétiques puis les massages et enfin l’aromathérapie.
                </p>
                <p class="section__text reveal-5">
                En me tournant vers cette dernière, je me suis orientée vers des produits 100% naturels pour assurer le bien-être de tous. J’ai pleinement conscience de la pression que nous subissons tous à chaque instant, dans un environnement où l’on nous demande toujours plus de performances. Pour permettre à chacun de trouver un moment de sérénité, je souhaite me mettre a votre service pour vous offrir un moment de détente et de douceur. 
                </p>
            </div>
            <div class="container-qualifications reveal">

                <div class="row">

                    <div class="col-12 col-md-5 offset-md-1 order-md-2 image-col">
                        <?php get_template_part('parts/grid-dots', null, 'reveal-8'); ?>
                        <div class="image reveal-5">
                        <img class="presentation-image" src="<?= get_template_directory_uri() ?>/images/image-presentation.jpg" alt="" srcset="">
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
                            while ($qualifications->have_posts()) : $qualifications->the_post();
                            ?>
                                
                                <div class="image-certification" data-id="<?= the_ID(); ?>" style="background-image:url('<?= get_field("image")["sizes"]["medium_large"]; ?>');">

                                </div>

                            <?php
                            endwhile;
                            ?>
                        </div>

                    </div>

                    <div class="col-12 col-md-6 order-md-1 qualifications-col">
                        <div class="qualifications-col__content">
                            <div class="container-icon reveal-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                    <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                </svg>
                            </div>

                            <h3 class="reveal-1">Qualifications</h3>
                            <ul class="list-qualifications">

                                <?php
                                /**
                                 * Setup query to show the ‘services’ post type with ‘8’ posts.
                                 * Output the title with an excerpt.
                                 */

                                $countQualifications = 1;
                                while ($qualifications->have_posts()) : $qualifications->the_post();
                                    $countQualifications++;
                                ?>

                                    <li class="qualification-item reveal-<?= $countQualifications; ?>" data-id="<?= the_ID(); ?>">
                                        <?= get_field("annee_d’obtention") . " - " . get_the_title(); ?>
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


    <?php get_template_part('parts/cta-section'); ?>

</div>
<!-- END PAGE -->

<?php get_footer(); ?>