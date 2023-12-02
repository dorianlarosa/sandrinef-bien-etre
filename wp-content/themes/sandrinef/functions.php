<?php

/*****************
 * VERSIONNING
 ******************/

// Get the theme version & make it a named constant
$theme_data = wp_get_theme();
define('THEME_VERSION', $theme_data->Version);


function set_custom_ver_css_js($src)
{
  // style.css URI
  $style_file = get_stylesheet_directory() . '/style.css';

  if ($style_file) {
    // css file timestamp
    $theme_data = wp_get_theme();
    $version = $theme_data->Version;

    if (strpos($src, 'ver='))
      // use the WP function add_query_arg() 
      // to set the ver parameter in 
      $src = add_query_arg('ver', $version, $src);
    return esc_url($src);
  }
}



/*****************
 * Disable the emoji's
 ******************/
function disable_emojis()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
  add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
}
add_action('init', 'disable_emojis');

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param array $plugins 
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce($plugins)
{
  if (is_array($plugins)) {
    return array_diff($plugins, array('wpemoji'));
  } else {
    return array();
  }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch($urls, $relation_type)
{
  if ('dns-prefetch' == $relation_type) {
    /** This filter is documented in wp-includes/formatting.php */
    $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');

    $urls = array_diff($urls, array($emoji_svg_url));
  }

  return $urls;
}


/*****************
 * Disable embeds
 ******************/
function disable_embeds_code_init()
{

  // Remove the REST API endpoint.
  remove_action('rest_api_init', 'wp_oembed_register_route');

  // Turn off oEmbed auto discovery.
  add_filter('embed_oembed_discover', '__return_false');

  // Don't filter oEmbed results.
  remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

  // Remove oEmbed discovery links.
  remove_action('wp_head', 'wp_oembed_add_discovery_links');

  // Remove oEmbed-specific JavaScript from the front-end and back-end.
  remove_action('wp_head', 'wp_oembed_add_host_js');
  add_filter('tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin');

  // Remove all embeds rewrite rules.
  add_filter('rewrite_rules_array', 'disable_embeds_rewrites');

  // Remove filter of the oEmbed result before any HTTP requests are made.
  remove_filter('pre_oembed_result', 'wp_filter_pre_oembed_result', 10);
}

add_action('init', 'disable_embeds_code_init', 9999);

function disable_embeds_tiny_mce_plugin($plugins)
{
  return array_diff($plugins, array('wpembed'));
}

function disable_embeds_rewrites($rules)
{
  foreach ($rules as $rule => $rewrite) {
    if (false !== strpos($rewrite, 'embed=true')) {
      unset($rules[$rule]);
    }
  }
  return $rules;
}


/******
 * remove link inutile
 ******/
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');


// Disable REST API link tag
remove_action('wp_head', 'rest_output_link_wp_head', 10);

// Disable oEmbed Discovery Links
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

// Disable REST API link in HTTP headers
remove_action('template_redirect', 'rest_output_link_header', 10);



// // REMOVE POST MENU ADMIN
// function remove_posts_menu()
// {
//   remove_menu_page('edit.php');
// }
// add_action('admin_menu', 'remove_posts_menu');


/******
 * enqueue script
 ******/

// Supprimer le CSS de la bibliothèque de blocs Gutenberg du chargement sur le frontend
function  smartwp_remove_wp_block_library_css()
{
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
  wp_dequeue_style('style bloc-wc'); // Suppression du bloc CSS WooCommerce
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);


// Removing front end admin bar because it's ugly
add_filter('show_admin_bar', '__return_false');

///////////
// ADD THEME SUPPORT
//////////

// logo personalisation
function wpc_theme_support()
{
  add_theme_support('custom-logo', array(
    'flex-height' => true,
    'flex-width'  => true,
  ));
}
add_action('after_setup_theme', 'wpc_theme_support');

///////////
// ENQUEUE SCRIPT
//////////

// enqueue style
function sandrinef_enqueue_style()
{
  wp_enqueue_style('leaflet-css', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.css', array(), false);
  wp_enqueue_style('my-css-theme', get_stylesheet_uri(), array(), THEME_VERSION);
}

add_action('wp_enqueue_scripts', 'sandrinef_enqueue_style');


// enqueue script
function sandrinef_enqueue_script()
{

  //wp_deregister_script('jquery');

  wp_enqueue_script('leaflet-js', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.js', [], false, true);

  wp_enqueue_script('my-js-theme', get_template_directory_uri() . '/js/script.js', [], false, true);
  wp_localize_script('ajax-js-theme', 'adminAjax', admin_url('admin-ajax.php'));

  $translation_array = array('templateUrl' => get_stylesheet_directory_uri());
  //after wp_enqueue_script
  wp_localize_script('my-js-theme', 'object_name', $translation_array);
}


add_action('wp_enqueue_scripts', 'sandrinef_enqueue_script', 11);

/////////////
// CPT
////////////

function creer_taxonomie_services()
{
  register_taxonomy(
    'categorie_services', // Le nom de la taxonomie
    'services',           // Le CPT auquel elle est associée
    array(
      'labels' => array(
        'name' => 'Catégories de Services',
        // Ajoutez d'autres labels selon vos besoins
      ),
      'show_ui' => true,
      'show_in_quick_edit' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array('slug' => 'categorie-services'),
      'hierarchical' => true,
    )
  );
}
add_action('init', 'creer_taxonomie_services');


// Register Custom Post Type
function custom_post_type()
{

  //   // MASSAGES
  //   $labelsMassages = array(
  //     'name'                  => 'Massages',
  //     'singular_name'         => 'Massage',
  //     'menu_name'             => __('Massages', 'text_domain'),
  //     'name_admin_bar'        => __('Massages', 'text_domain'),
  //     'archives'              => __('Item Archives', 'text_domain'),
  //     'attributes'            => __('Item Attributes', 'text_domain'),
  //     'parent_item_colon'     => __('Parent Item:', 'text_domain'),
  //     'all_items'             => __('Tout les massages', 'text_domain'),
  //     'add_new_item'          => __('Ajouter un nouveau massage', 'text_domain'),
  //     'add_new'               => __('Ajouter', 'text_domain'),
  //     'new_item'              => __('Nouveau massage', 'text_domain'),
  //     'edit_item'             => __('Modifier le massage', 'text_domain'),
  //     'update_item'           => __('Mettre à jour le massage', 'text_domain'),
  //     'view_item'             => __('Voir le massage', 'text_domain'),
  //     'view_items'            => __('Voir les massages', 'text_domain'),
  //     'search_items'          => __('Chercher un massage', 'text_domain'),
  //     'not_found'             => __('Not found', 'text_domain'),
  //     'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
  //     'featured_image'        => __('Featured Image', 'text_domain'),
  //     'set_featured_image'    => __('Set featured image', 'text_domain'),
  //     'remove_featured_image' => __('Remove featured image', 'text_domain'),
  //     'use_featured_image'    => __('Use as featured image', 'text_domain'),
  //     'insert_into_item'      => __('Insert into item', 'text_domain'),
  //     'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
  //     'items_list'            => __('Items list', 'text_domain'),
  //     'items_list_navigation' => __('Items list navigation', 'text_domain'),
  //     'filter_items_list'     => __('Filter items list', 'text_domain'),
  //   );
  //   $argsMassages = array(
  //     'label'                 => __('Massage', 'text_domain'),
  //     'description'           => __('Services proposé', 'text_domain'),
  //     'labels'                => $labelsMassages,
  //     'supports'              => array('title', 'page-attributes'),
  //     'taxonomies'            => array(),
  //     'hierarchical'          => true,
  //     'public'                => true,
  //     'show_ui'               => true,
  //     'show_in_menu'          => true,
  //     'menu_position'         => 5,
  //     'menu_icon'             => 'dashicons-universal-access',
  //     'show_in_admin_bar'     => true,
  //     'show_in_nav_menus'     => true,
  //     'can_export'            => true,
  //     'has_archive'           => true,
  //     'exclude_from_search'   => false,
  //     'publicly_queryable'    => true,
  //     'capability_type'       => 'page',
  //     'rewrite'               => 'services'
  //   );
  //   register_post_type('massages', $argsMassages);

  // SERVICES
  $labelsServices = array(
    'name'                  => 'Services',
    'singular_name'         => 'Service',
    'menu_name'             => __('Services', 'text_domain'),
    'name_admin_bar'        => __('Services', 'text_domain'),
    'archives'              => __('Item Archives', 'text_domain'),
    'attributes'            => __('Item Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent Item:', 'text_domain'),
    'all_items'             => __('Tout les Services', 'text_domain'),
    'add_new_item'          => __('Ajouter un nouveau Service', 'text_domain'),
    'add_new'               => __('Ajouter', 'text_domain'),
    'new_item'              => __('Nouveau Service', 'text_domain'),
    'edit_item'             => __('Modifier le Service', 'text_domain'),
    'update_item'           => __('Mettre à jour le Service', 'text_domain'),
    'view_item'             => __('Voir le Service', 'text_domain'),
    'view_items'            => __('Voir les Services', 'text_domain'),
    'search_items'          => __('Chercher un Service', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list'            => __('Items list', 'text_domain'),
    'items_list_navigation' => __('Items list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter items list', 'text_domain'),
  );
  $argsServices = array(
    'label'                 => __('Service', 'text_domain'),
    'description'           => __('Services proposés', 'text_domain'),
    'labels'                => $labelsServices,
    'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    'taxonomies'            => array('categorie_services'),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_rest'          => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-universal-access',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type('services', $argsServices);

  // BIENFAITS
  $labelsBienfaits = array(
    'name'                  => 'Bienfaits',
    'singular_name'         => 'Bienfait',
    'menu_name'             => __('Bienfaits', 'text_domain'),
    'name_admin_bar'        => __('Bienfaits', 'text_domain'),
    'archives'              => __('Item Archives', 'text_domain'),
    'attributes'            => __('Item Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent Item:', 'text_domain'),
    'all_items'             => __('Tout les Bienfaits', 'text_domain'),
    'add_new_item'          => __('Ajouter un nouveau Bienfait', 'text_domain'),
    'add_new'               => __('Ajouter', 'text_domain'),
    'new_item'              => __('Nouveau Bienfait', 'text_domain'),
    'edit_item'             => __('Modifier le Bienfait', 'text_domain'),
    'update_item'           => __('Mettre à jour le Bienfait', 'text_domain'),
    'view_item'             => __('Voir le Bienfait', 'text_domain'),
    'view_items'            => __('Voir les Bienfaits', 'text_domain'),
    'search_items'          => __('Chercher un Bienfait', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list'            => __('Items list', 'text_domain'),
    'items_list_navigation' => __('Items list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter items list', 'text_domain'),
  );
  $argsBienfaits = array(
    'label'                 => __('Bienfait', 'text_domain'),
    'description'           => __('Bienfaits proposés', 'text_domain'),
    'labels'                => $labelsBienfaits,
    'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    'taxonomies'            => array(),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_rest'          => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-universal-access',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type('bienfaits', $argsBienfaits);


  // AVANTAGES
  $labelsAvantages = array(
    'name'                  => 'Avantages',
    'singular_name'         => 'Avantage',
    'menu_name'             => __('Avantages', 'text_domain'),
    'name_admin_bar'        => __('Avantages', 'text_domain'),
    'archives'              => __('Item Archives', 'text_domain'),
    'attributes'            => __('Item Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent Item:', 'text_domain'),
    'all_items'             => __('Tout les avantages', 'text_domain'),
    'add_new_item'          => __('Ajouter un nouveau avantage', 'text_domain'),
    'add_new'               => __('Ajouter', 'text_domain'),
    'new_item'              => __('Nouveau avantage', 'text_domain'),
    'edit_item'             => __('Modifier l\'avantage', 'text_domain'),
    'update_item'           => __('Mettre à jour l\'avantage', 'text_domain'),
    'view_item'             => __('Voir l\'avantage', 'text_domain'),
    'view_items'            => __('Voir les avantages', 'text_domain'),
    'search_items'          => __('Chercher un avantage', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list'            => __('Items list', 'text_domain'),
    'items_list_navigation' => __('Items list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter items list', 'text_domain'),
  );
  $argsAvantages = array(
    'label'                 => __('Avantage', 'text_domain'),
    'description'           => __('Bienfaits et avantages', 'text_domain'),
    'labels'                => $labelsAvantages,
    'supports'              => array('title', 'page-attributes'),
    'taxonomies'            => array(),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-heart',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => false,
    'capability_type'       => 'page',
  );
  register_post_type('avantages', $argsAvantages);


  // AVANTAGES
  $labelsReview = array(
    'name'                  => 'Avis clients',
    'singular_name'         => 'Avis client',
    'menu_name'             => __('Avis clients', 'text_domain'),
    'name_admin_bar'        => __('Avis clients', 'text_domain'),
    'archives'              => __('Item Archives', 'text_domain'),
    'attributes'            => __('Item Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent Item:', 'text_domain'),
    'all_items'             => __('Tout les avis clients', 'text_domain'),
    'add_new_item'          => __('Ajouter un nouveau avis client', 'text_domain'),
    'add_new'               => __('Ajouter', 'text_domain'),
    'new_item'              => __('Nouveau avis client', 'text_domain'),
    'edit_item'             => __('Modifier l\'avis client', 'text_domain'),
    'update_item'           => __('Mettre à jour l\'avis client', 'text_domain'),
    'view_item'             => __('Voir l\'avis client', 'text_domain'),
    'view_items'            => __('Voir les avis clients', 'text_domain'),
    'search_items'          => __('Chercher un avis client', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list'            => __('Items list', 'text_domain'),
    'items_list_navigation' => __('Items list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter items list', 'text_domain'),
  );
  $argsReview = array(
    'label'                 => __('Avis clients', 'text_domain'),
    'description'           => __('Avis clients', 'text_domain'),
    'labels'                => $labelsReview,
    'supports'              => array('title', 'page-attributes'),
    'taxonomies'            => array(),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-format-chat',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => false,
    'capability_type'       => 'page',
  );
  register_post_type('review', $argsReview);



  // QUALIFICATIONS
  $labelsQualifications = array(
    'name'                  => 'Qualifications',
    'singular_name'         => 'Qualification',
    'menu_name'             => __('Qualifications', 'text_domain'),
    'name_admin_bar'        => __('Qualifications', 'text_domain'),
    'archives'              => __('Item Archives', 'text_domain'),
    'attributes'            => __('Item Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent Item:', 'text_domain'),
    'all_items'             => __('Toutes les qualifications', 'text_domain'),
    'add_new_item'          => __('Ajouter une nouvelle qualification', 'text_domain'),
    'add_new'               => __('Ajouter', 'text_domain'),
    'new_item'              => __('Nouvelle qualification', 'text_domain'),
    'edit_item'             => __('Modifier la qualification', 'text_domain'),
    'update_item'           => __('Mettre à jour la qualification', 'text_domain'),
    'view_item'             => __('Voir la qualification', 'text_domain'),
    'view_items'            => __('Voir les qualifications', 'text_domain'),
    'search_items'          => __('Chercher une qualifications', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list'            => __('Items list', 'text_domain'),
    'items_list_navigation' => __('Items list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter items list', 'text_domain'),
  );
  $argsQualifications = array(
    'label'                 => __('Qualifications', 'text_domain'),
    'description'           => __('Qualifications', 'text_domain'),
    'labels'                => $labelsQualifications,
    'supports'              => array('title', 'page-attributes'),
    'taxonomies'            => array(),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-welcome-learn-more',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => false,
    'capability_type'       => 'page',
  );
  register_post_type('qualifications', $argsQualifications);



  // VILLES
  $labelsVilles = array(
    'name'                  => 'Villes',
    'singular_name'         => 'Ville',
    'menu_name'             => __('Villes', 'text_domain'),
    'name_admin_bar'        => __('Villes', 'text_domain'),
    'archives'              => __('Item Archives', 'text_domain'),
    'attributes'            => __('Item Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent Item:', 'text_domain'),
    'all_items'             => __('Tout les Villes', 'text_domain'),
    'add_new_item'          => __('Ajouter un nouveau Ville', 'text_domain'),
    'add_new'               => __('Ajouter', 'text_domain'),
    'new_item'              => __('Nouveau Ville', 'text_domain'),
    'edit_item'             => __('Modifier le Ville', 'text_domain'),
    'update_item'           => __('Mettre à jour le Ville', 'text_domain'),
    'view_item'             => __('Voir le Ville', 'text_domain'),
    'view_items'            => __('Voir les Villes', 'text_domain'),
    'search_items'          => __('Chercher un Ville', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list'            => __('Items list', 'text_domain'),
    'items_list_navigation' => __('Items list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter items list', 'text_domain'),
  );
  $argsVilles = array(
    'label'                 => __('Ville', 'text_domain'),
    'description'           => __('Zone d\'intervention', 'text_domain'),
    'labels'                => $labelsVilles,
    'supports'              => array('title', 'page-attributes'),
    'taxonomies'            => array(),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-universal-access',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => false,
    'capability_type'       => 'page',
  );
  register_post_type('villes', $argsVilles);
}
add_action('init', 'custom_post_type', 0);


/**
 * Enables Gutenberg editor for "product" CPT.
 */

function wpjohnny_gutenberg_cpt($can_edit, $post_type)
{
  if ($post_type == 'services') {
    $can_edit = true;
  }

  return $can_edit;
}
add_filter('use_block_editor_for_post_type', 'wpjohnny_gutenberg_cpt', 10, 2);


////////
// HOOK FORMS BTN
////////

add_action('wpforms_display_submit_before', 'ajouter_avant_bouton_soumission', 10, 2);

function ajouter_avant_bouton_soumission($form_data)
{
  // Vous pouvez vérifier l'ID du formulaire si nécessaire
  echo ' <span class="btn-arrow"> 
            <span class="background">
            </span>';
}

add_action('wpforms_display_submit_after', 'ajouter_apres_bouton_soumission', 10, 2);

function ajouter_apres_bouton_soumission($form_data)
{
  // Vous pouvez vérifier l'ID du formulaire si nécessaire
  echo '  <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg>
        </span>';
}

//////////
// MENU PAGE ADMIN
//////////

if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title'    => 'Informations de contact',
    'menu_title'    => 'Contact',
    'menu_slug'     => 'information',
    'capability'    => 'edit_posts',
    'position'      => 8,
    'icon_url'      => 'dashicons-text-page',
    'redirect'      => false,
  ));
}

if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title'    => 'Informations de l\'événement',
    'menu_title'    => 'Evénement',
    'menu_slug'     => 'evenement-info',
    'capability'    => 'edit_posts',
    'position'      => 7,
    'icon_url'      => 'dashicons-calendar-alt',
    'redirect'      => false,
  ));
}


/////////
// ADD MENU WORDPRESS
/////////

// s'il y a plusieurs menus à rajouter, voici le code :
function register_my_menus()
{
  register_nav_menus(
    array(
      'main-menu' => __('Menu principal'),
      'footer-menu' => __('Menu Footer'),
    )
  );
}
add_action('init', 'register_my_menus');

////////
// ADD CLASS ACTIVE MENU WORDPRESS CURRENT PAGE
////////

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
  if (in_array('current-menu-item', $classes)) {
    $classes[] = 'active ';
  }
  return $classes;
}

////////
// ADD DROPDOWN TO PRIMARY MENU
////////

add_filter('wp_nav_menu_items', 'dropdown_menu_item', 10, 2);
function dropdown_menu_item($items, $args)
{
  if ($args->theme_location == 'main-menu') {
    $items .= '<li id="sub-menu-container">
                  <div id="sub-menu-holder">
                      <div id="sub-menu-bottom">

                      </div>
                  </div>
              </li>';
  }
  return $items;
}

add_filter('walker_nav_menu_start_el', 'parent_menu_dropdown', 10, 4);
function parent_menu_dropdown($item_output, $item, $depth, $args)
{

  if (is_nav_menu('Menu principal') && !empty($item->classes) && in_array('menu-item-has-children', $item->classes) && $depth == 0) {
    return $item_output . '<svg xmlns="http://www.w3.org/2000/svg" class="chevron" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
      </svg>';
  }

  return $item_output;
}


// DISPLAY DESCRIPTION MENU

class Custom_Walker extends Walker_Nav_Menu
{

  // // ADD DESCRIPTION
  // function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  // {
  //   $classes = empty($item->classes) ? array() : (array) $item->classes;
  //   $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
  //   !empty($class_names) and $class_names = ' class="' . esc_attr($class_names) . '"';
  //   $output .= "<li id='menu-item-$item->ID' $class_names>";

  //   $attributes  = '';
  //   !empty($item->attr_title) and $attributes .= ' title="'  . esc_attr($item->attr_title) . '"';
  //   !empty($item->target) and $attributes .= ' target="' . esc_attr($item->target) . '"';
  //   !empty($item->xfn) and $attributes .= ' rel="'    . esc_attr($item->xfn) . '"';
  //   !empty($item->url) and $attributes .= ' href="'   . esc_attr($item->url) . '"';

  //   $title = apply_filters('the_title', $item->title, $item->ID);
  //   $item_output = $args->before
  //     . "<a $attributes>"
  //     . $args->link_before
  //     . '<span class="menu-item-name">' . $title . '</span>'
  //     . '<span class="menu-item-description">' . $item->description . '</span>'
  //     . '</a> '
  //     . $args->link_after
  //     . $args->after; // Fermer </div> ici

  //   $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  // }


  // Surcharge de la méthode start_lvl pour ajouter des classes et l'icône de retour
  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $indent = str_repeat("\t", $depth);
    $classes = array('sub-menu');

    if ($depth === 0) {
      // Ajout de la classe 'sous-menu' et début de la div pour les sous-menus
      $classes[] = 'sous-menu';
      $output .= "$indent<ul class=\"" . implode(' ', $classes) . "\">\n";
    } elseif ($depth === 1) {
      // Ajout de la classe 'sous-sous-menu' pour les sous-sous-menus
      $classes[] = 'sous-sous-menu';
      $output .= "$indent<ul class=\"" . implode(' ', $classes) . "\">\n";
    } else {
      // Pour les niveaux plus profonds, si nécessaire
      $output .= "$indent<ul class=\"" . implode(' ', $classes) . "\">\n";
    }
  }
}


add_filter('wp_get_nav_menu_items', 'ajouter_cpt_services_au_menu', 10, 3);

function ajouter_cpt_services_au_menu($items, $menu, $args)
{
  if ($menu->slug == 'menu-principal') { // Remplacez par le slug de votre menu
    $parent_id = 65; // ID de l'élément parent dans votre menu

    // Trouver l'élément parent dans le menu
    foreach ($items as $item) {
      if ($item->object_id == $parent_id && $item->object == 'page') {
        $parent_menu_id = $item->ID;
        break;
      }
    }

    if (isset($parent_menu_id)) {
      $categories = get_terms(array(
        'taxonomy' => 'categorie_services',
        'hide_empty' => true,
      ));

      foreach ($categories as $category) {
        $cat_menu_item = new stdClass();
        $cat_menu_item->ID = 1000000 + $category->term_id;
        $cat_menu_item->db_id = $cat_menu_item->ID;
        $category_description = strip_tags(category_description($category->term_id));
        $cat_menu_item->title = '<p class="category-name">' . esc_html($category->name) . '</p>'
          . '<p class="category-description">' . $category_description . '</p>';
        $cat_menu_item->url = get_term_link($category);
        $cat_menu_item->menu_order = 999 + $category->term_id;
        $cat_menu_item->menu_item_parent = $parent_menu_id;
        $cat_menu_item->type = 'custom';
        $cat_menu_item->object = 'custom';
        $cat_menu_item->object_id = $category->term_id;
        $items[] = $cat_menu_item;

        $posts_services = get_posts(array(
          'post_type' => 'services',
          'posts_per_page' => -1,
          'tax_query' => array(
            array(
              'taxonomy' => 'categorie_services',
              'field' => 'term_id',
              'terms' => $category->term_id,
            ),
          ),
        ));

        foreach ($posts_services as $post) {
          $post_menu_item = new stdClass();
          $post_menu_item->ID = 2000000 + $post->ID;
          $post_menu_item->db_id = $post_menu_item->ID;
          $nom_du_massage = get_field('nom_du_massage', $post->ID);
          $description_courte = get_field('description_courte', $post->ID);
          $post_menu_item->title = '<p class="service-name">' . esc_html($nom_du_massage) . '</p>'
            . '<p class="service-description">' . esc_html($description_courte) . '</p>';
          $post_menu_item->url = get_permalink($post);
          $post_menu_item->menu_order = 999 + $post->ID;
          $post_menu_item->menu_item_parent = $cat_menu_item->ID;
          $post_menu_item->type = 'custom';
          $post_menu_item->object = 'custom';
          $post_menu_item->object_id = $post->ID;
          $items[] = $post_menu_item;
        }

         // Ajouter un lien vers la page parente 'Services'
         $lien_menu_item = new stdClass();
         $lien_menu_item->ID = 3000000 + $category->term_id;
         $lien_menu_item->db_id = $lien_menu_item->ID;
         $lien_menu_item->title = 'Voir tous les services';
         $lien_menu_item->url = get_permalink($parent_id); // URL de la page parente
         $lien_menu_item->menu_order = 1000 + $category->term_id;
         $lien_menu_item->menu_item_parent = $parent_menu_id;
         $lien_menu_item->type = 'custom';
         $lien_menu_item->object = 'custom';
         $lien_menu_item->object_id = $parent_id;
         $lien_menu_item->classes = array('link-see-all'); // Ajout de la classe
         $items[] = $lien_menu_item;
      }
    }
  }

  return $items;
}


////////
// ADD IMAGE SIZE THUMBNAIL SERVICE
////////
add_image_size('custom-size', 700, 700, array('center', 'center'));
