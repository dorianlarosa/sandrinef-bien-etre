<?php get_header(); ?>

<div id="single-post" class="content-page">
    <section id="header-page" class="container-fluid header">
        <div class="container container-content-header">
            <div class="content-header-small">

                <h1 class="content-header__title "><?php the_title(); ?></h1>
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs" class="">', '</p>');
                }
                ?>


            </div>
        </div>
    </section>

    <section id="presentation-section" class="container-fluid section">
        <div class="container">

            <div class="editing-content">
                <?php the_post_thumbnail('full'); ?>

                <?php the_content(); ?>
            </div>

        </div>
    </section>





</div>

<?php get_footer(); ?>