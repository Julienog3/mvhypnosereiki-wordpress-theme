<?php
function theme_setup()
{
   add_theme_support('post-thumbnails');
}

function register_post_types()
{
   $supportsLabels = array(
      'name' => 'Accompagnements',
      'all_items' => 'Tous les accompagnements',
      'singular_name' => 'Accompagnement',
      'add_new_item' => 'Ajouter un accompagnement',
      'edit_item' => 'Modifier le accompagnement',
      'menu_name' => 'Accompagnements'
   );

   $supportsArgs = array(
      'labels' => $supportsLabels,
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
      'menu_position' => 5,
      'menu_icon' => 'dashicons-heart',
   );

   $newsLabels = array(
      'name' => 'Actualités',
      'all_items' => 'Toutes les actualités',
      'singular_name' => 'Actualité',
      'add_new_item' => 'Ajouter une actualité',
      'edit_item' => 'Modifier l\'actualité',
      'menu_name' => 'Actualités'
   );

   $newsArgs = array(
      'labels' => $newsLabels,
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
      'menu_position' => 6,
      'menu_icon' => 'dashicons-megaphone',
   );

   register_post_type('accompagnements', $supportsArgs);
   register_post_type('actualites', $newsArgs);
}

function register_assets()
{
   // $script_asset = include get_parent_theme_file_uri('/public/js/app.asset.php'),
   // $style_asset = include get_parent_theme_file_uri('/public/css/style.css')

   // wp_enqueue_script(
   //    'mvhypnosereiki-script',
   //    get_theme_file_uri('public/js/app.js'),
   //    $script_asset['dependencies'],
	// 	$script_asset['version'],
	// 	true
   // );
   // wp_enqueue_style(
   //    'mvhypnosereiki-style',
   //    get_theme_file_uri('public/css/style.css'),
   //    $style_asset['dependencies'],
	// 	$style_asset['version'],
   // );

   wp_enqueue_script(
      'mvhypnosereiki-script',
      get_parent_theme_file_uri('/public/js/app.js'),
      array(),
      wp_get_theme()->get('Version'),
      array('strategy'  => 'defer')
   );
   wp_enqueue_style(
      'mvhypnosereiki-style',
      get_parent_theme_file_uri('/public/css/style.css'),
      array(),
      wp_get_theme()->get('Version')
   );
}

add_action('after_setup_theme', 'theme_setup');
add_action('wp_enqueue_scripts', 'register_assets');
add_action('init', 'register_post_types');

@ini_set('upload_max_size', '256M');
@ini_set('post_max_size', '256M');
@ini_set('max_execution_time', '300');
