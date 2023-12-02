<div class="block block-title">
    <h2 class="section__title reveal-3">

        <?php
       
        $str =  block_field('titre', false);
        $firstLetter = substr($str, 0, 1);
    
        // Entourer la première lettre avec une balise <span>
        $wrappedFirstLetter = '<span class="round-container">' . $firstLetter . '</span>';
        
        // Concaténer le reste de la chaîne
        $remainder = substr($str, 1);
        
        echo $wrappedFirstLetter . $remainder;

        ?>
    </h2>
    <?php get_template_part('parts/divider'); ?>
</div>