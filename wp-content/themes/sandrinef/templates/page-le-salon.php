<?php
/*
 * Template Name: Page le salon
 */
get_header();
?>
<!-- PAGE -->


<div id="page-salon" class="content-page">
    <section id="header-page" class="container-fluid header">
        <div class="container container-content-header">
            <div class="content-header">
                <h1 class="content-header__title"><?= the_title(); ?></h1>
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }
                ?>
            </div>
        </div>
    </section>


    <section id="gallery-section" class="container-fluid section">
        <div class="container">
            <h2 class="section__title"> <span class="round-container">L</span>e salon</h2>
            <?php get_template_part('parts/divider'); ?>
            <p class="section__text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, facere dicta vero odit libero aliquid deserunt accusamus placeat ab debitis earum consequatur porro dolorem inventore odio nisi saepe iusto! Culpa! </p>

            <div id="grid-images">

                <?php $gallery = get_field("gallerie");

                // echo "<pre>";
                // var_dump($gallery);
                // echo "</pre>";

                $compteur = 0;

                // Boucle sur chaque élément du tableau
                foreach ($gallery as $image) {
                    // Vérifie si la clé 'url' existe dans le tableau de l'image
                    if (isset($image['url'])) {
                        $compteur++; ?>
                        <div class="item item-<?= $compteur; ?>">
                            <img src="<?= $image['url']; ?>" alt="" class="image ">
                        </div>
                <?php
                    }
                }
                ?>
            </div>
    </section>


</div>
<?php
get_footer();
?>