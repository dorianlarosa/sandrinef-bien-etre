<?php
/*
 * Template Name: Page massages
 */
get_header();
?>
<!-- PAGE -->

<div id="page-massages" class="content-page">
    <section id="header-page" class="container-fluid header">
        <div class="container container-content-header">
            <div class="content-header reveal">
                <h1 class="content-header__title reveal-1"><?= the_title(); ?></h1>
            </div>
        </div>
    </section>


    <section id="services-section" class="container-fluid section">
        <div class="container">
            <div class="reveal">

                <h2 class="section__title reveal-2">Mes services</h2>
                <img class="divider reveal-3" src="<?= get_template_directory_uri() ?>/images/divider.svg" alt="">
                <p class="section__subtitle reveal-4">
                    Découvrez l'ensemble de mes services
                </p>
                <p class="section__text reveal-5">
                Chacun a droit à son instant de détente. Que vous souhaitiez une pause dans votre quotidien ou que vous ayez besoin de vous ressourcer, vous trouverez votre bien-être avec moi. Que votre souhait soit un massage, avec ou sans huile, en position assise ou étendue, que vous ayez besoin de rééquilibrer votre capital énergie, je me ferais un plaisir de vous procurer le soin bien-être de votre choix.                </p>
            </div>

            <?php get_template_part('parts/list-services'); ?>


    </section>


    <?php get_template_part('parts/avantages-section'); ?>

    <?php get_template_part('parts/cta-section'); ?>


</div>
<!-- END PAGE -->

<?php get_footer(); ?>