<?php
get_header();
?>
<!-- PAGE -->

<div id="page-single-services" class="content-page">

    <section id="header-page" class="container-fluid header">
        <div class="container container-content-header">
            <div class="content-header ">

                <h1 class="content-header__title "><?php the_title(); ?></h1>
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs" class="">', '</p>');
                }
                ?>


            </div>
        </div>
    </section>

    <section class="container section section-service reveal-parent">
        <div class="row flex-column-reverse flex-lg-row justify-content-center resume-service">

            <div class="col-12 col-lg-5 mt-5 mt-lg-0">
                <div class="item-details ">
                    <h2 class="item-details__title"> <?= the_field("nom_du_massage"); ?></h2>
                    <!-- <?php if (get_field("disponible_en_duo")) { ?>

                        <span class="badge badge-duo ">
                            Disponible en duo
                        </span>

                    <?php } ?> -->



                    <p class=" <?= get_field("disponible_en_duo") ? "mt-4" : "" ?> item-details__text">
                        <?= the_field("description"); ?>
                    </p>

                    <!-- 
                    <?php $seances = get_field("liste_des_durees_de_seance");

                    if ($seances) { ?>
                        <ul class="item-details__list-seances">

                            <?php foreach ($seances as $seance) { ?>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                                        <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                    </svg>
                                    <?= $seance["duree"] ?> minutes - <?= $seance["prix"] ?>€
                                </li>
                            <?php } ?>

                        </ul>
                    <?php } ?> -->

                    <form class="item-details__select-seance" id="form-reservation-single-service-page" action="">

                    <div class="d-flex align-items-center">

                        <?php if ($seances) { ?>
                            <select id="select-reservation-single-service-page">

                                <?php foreach ($seances as $seance) { ?>
                                    <option <?= $index === 0 ? 'selected' : '' ?> value="<?= $seance["id"] ?>" data-price="<?= $seance["prix"] ?>"><?= $seance["duree"] ?> minutes</option>
                                <?php } ?>

                            </select>
                        <?php } ?>

                        <span id="price-display"></span>

                        </div>

                        <div class="container-btn item-details__container-btn">


                            <input type="submit" class="btn" value="Réserver">

                            <button type="button" class="btn btn-outline btn-gift-card">
                                Offrir une séance
                            </button>
                        </div>

                    </form>



                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-5 offset-lg-1 offset-xl-2">
                <?php $imageService = get_field("image"); ?>

                <div class="item-content__image">

                    <div class="img-container">
                        <div class="img-overlay"></div>
                        <div class="img-content" ata-lg-parallax-amplitude="-1" data-lg-parallax="child">
                            <img class="img-service" src="<?= $imageService["sizes"]["custom-size"]; ?>" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- <section class="section container resume-service">

        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 pe-lg-4 pe-xl-5">
                <?php $imageService = get_field("image"); ?>

                <div class="item-content__image">

                    <div class="img-container-outline">
                        <div class="img-container">
                            <div class="img-overlay"></div>
                            <div class="img-content">
                                <img class="img-service" src="<?= $imageService["sizes"]["custom-size"]; ?>" alt="">
                            </div>
                            <div class="img-outline"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-6 pt-4 mt-5 mt-lg-0">
                <div class="item-details ">

                    <?php if (get_field("disponible_en_duo")) { ?>

                        <span class="badge item-details__badge-duo">
                            Disponible en duo
                        </span>

                    <?php } ?>

                    <h3 class="item-details__title">
                        <?= the_field("nom_du_massage"); ?>
                    </h3>

                    <p class="item-details__text">
                        <?= the_field("description"); ?>
                    </p>


                    <?php $seances = get_field("liste_des_durees_de_seance");

                    if ($seances) { ?>
                        <ul class="item-details__list-seances">

                            <?php foreach ($seances as $seance) { ?>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                                        <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                    </svg>
                                    <?= $seance["duree"] ?> minutes - <?= $seance["prix"] ?>€
                                </li>
                            <?php } ?>

                        </ul>
                    <?php } ?>


                    <div class="container-btn item-details__container-btn">
                        <a href="https://www.kalendes.com/site/sandrinef-bien-etre/booking" target="_blank" class="btn">
                            Réserver
                        </a>

                        <a href="https://www.kalendes.com/site/sandrinef-bien-etre/gift" target="_blank" class="btn btn-outline">
                            Offrir une séance
                        </a>
                    </div>
                </div>
            </div>
        </div>








    </section> -->

    <?php $seances = get_field("liste_des_durees_de_seance");
    if ($seances) { ?>
        <section class="section pb-5" id="section-list-tarifs">
            <div class="container">

                <h2 class="section__title"> <span class="round-container">T</span>arifs</h2>
                <?php get_template_part('parts/divider'); ?>

                <div class="section__text">

                    <h3>En solo avec Sandrine</h3>
                    <p class="info">Je vous accueille pour un moment qui vous sera entièrement dédié, une bulle bien-être afin de prendre soin de vous dans un cadre reposant.</p>



                    <ul class="list-tarifs">

                        <?php foreach ($seances as $seance) { ?>
                            <li class="tarif">
                                <span>
                                    <?= $seance["duree"] ?> minutes
                                </span>
                                <span>
                                    <?= $seance["prix"] ?>€
                                </span>
                            </li>
                        <?php } ?>

                    </ul>


                    <?php if (get_field("disponible_en_duo")) {
                        $seancesDuo = get_field("liste_des_durees_de_seance_en_duo"); ?>

                        <h3>En duo avec Isabelle et Sandrine</h3>
                        <p class="info">En collaboration avec Isabelle, praticienne en massage bien-être, vous pourrez recevoir le massage californien en duo.</p>


                        <ul class="list-tarifs">

                            <?php foreach ($seancesDuo as $seance) { ?>
                                <li class="tarif">
                                    <span>
                                        <?= $seance["duree"] ?> minutes
                                    </span>
                                    <span>
                                        <?= $seance["prix"] ?>€
                                    </span>
                                </li>
                            <?php } ?>
                        </ul>
                        <p class="alert mt-3">Dans un soucis de syncronisation d'agendas, les services en duo ne sont pas réservables en ligne, pour cela vous pouvez me contacter directement au <?php the_field('numero_de_telephone', 'option'); ?></p>


                    <?php } ?>


                </div>

            </div>

        </section>
    <?php } ?>
    <section class="section pt-0">
        <div class="container">

            <div class="editing-content">
                <?php the_content(); ?>
            </div>

        </div>
    </section>

</div>

<!-- END PAGE -->

<?php get_footer(); ?>