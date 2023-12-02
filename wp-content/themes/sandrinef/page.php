<?php get_header(); ?>

<div id="page" class="content-page">
    <section id="header-page" class="container-fluid header" style="background-image:url('<?= get_template_directory_uri() ?>/images/header-homepage.jpg');">
        <div class="container container-content-header">
            <div class="content-header">
                <h1 class="content-header__title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section id="presentation-section" class="container-fluid section">
        <div class="container">

            <div class="editing-content">
                <?php the_content(); ?>
            </div>

        </div>
    </section>

   



</div>

<?php get_footer(); ?>