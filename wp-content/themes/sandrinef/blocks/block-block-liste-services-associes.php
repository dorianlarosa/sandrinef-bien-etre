<?php 

$related_massages = get_field('massages_associes');

// Vérifie si $related_massages contient des données et extrait les IDs
$post_ids = array();
if($related_massages) {
    foreach($related_massages as $post) {
        $post_ids[] = $post->ID;
    }
}

if (!empty($post_ids)) {
    $args = array(
        'post__in' => $post_ids,
        'post_type' => 'services',
        'posts_per_page' => -1,
        'orderby' => 'menu_order'
    );
    
    get_template_part('parts/list-services', null, $args);
}
