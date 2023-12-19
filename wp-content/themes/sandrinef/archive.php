<?php

get_header();
?>
<!-- PAGE -->

<div id="page-archive" class="content-page">
    <section id="header-page" class="container-fluid header">
        <div class="container container-content-header">
            <div class="content-header">
                <h1 class="content-header__title"><?php the_title(); ?></h1>
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs" >', '</p>');
                }
                ?>
            </div>
        </div>
    </section>


    <section id="services-section" class="container-fluid section">
        <div class="container">
            <div>

                <h2 class="section__title"> <span class="round-container">M</span>es services</h2>
                <?php get_template_part('parts/divider'); ?>
                <p class="section__text">
                    Chacun a droit à son instant de détente. Que vous souhaitiez une pause dans votre quotidien ou que vous ayez besoin de vous ressourcer, vous trouverez votre bien-être avec moi. Que votre souhait soit un massage, avec ou sans huile, en position assise ou étendue, que vous ayez besoin de rééquilibrer votre capital énergie, je me ferais un plaisir de vous procurer le soin bien-être de votre choix. </p>
                </p>
            </div>

            <?php get_template_part('parts/list-services'); ?>


    </section>


    <?php get_template_part('parts/avantages-section'); ?>

    <?php get_template_part('parts/cta-section'); ?>


</div>
<!-- END PAGE -->

<?php get_footer(); ?>