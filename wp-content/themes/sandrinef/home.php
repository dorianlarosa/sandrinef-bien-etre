<?php

get_header();
?>
<!-- PAGE -->

<div id="page-archive" class="content-page">
    <section id="header-page" class="container-fluid header">
        <div class="container container-content-header">
            <div class="content-header">
                <?php $blog_page_id = get_option('page_for_posts');
                $blog_page_title = get_the_title($blog_page_id);
                ?>
                <h1 class="content-header__title"><?= $blog_page_title ?></h1>
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

            <div class="row list-blog reveal-parent">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="col-12 col-md-6 col-lg-4 post">
                            <div class="post-content">
                                <div class="post-content__image">


                                    <div class="img-container">
                                        <div class="img-overlay"></div>
                                        <div data-lg-parallax-amplitude="1" data-lg-parallax="child" class="img-content">
                                            <img class="" src="<?= get_the_post_thumbnail_url() ?>" alt="Image de mise en avant">

                                        </div>
                                    </div>

                                </div>

                                <div>

                                    <h2 class="post-content__title">
                                        <a href="<?= the_permalink() ?>">
                                            <?= the_title(); ?>
                                        </a>
                                    </h2>

                                    <p class="post-content__text">
                                        <?= get_first_characters(get_the_content(), 300); ?>
                                    </p>



                                        <div class="container-btns">

                                            <a class='btn-arrow' href='<?= the_permalink() ?>'>

                                                <span class="background">
                                                </span>

                                                <span class='text'>
                                                    Lire l'article
                                                </span>

                                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                                </svg>

                                            </a>

                                        </div>



                                </div>

                            </div>
                        </div>
                <?php endwhile;
                endif; ?>

            </div>
    </section>



</div>
<!-- END PAGE -->

<?php get_footer(); ?>