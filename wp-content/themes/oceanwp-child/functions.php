<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome','simple-line-icons','oceanwp-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION
function ajouter_element_menu_admin($items, $args) {
    // Vérifiez si l'utilisateur actuel est un administrateur
    if (is_user_logged_in()) {
        // Code HTML de l'élément de menu pour les administrateurs
        $element_menu = '<li><a href="'.admin_url().'">Admin</a></li>';

        // // Trouver la position de la première occurrence de "</li>"
$pos = strpos($items, '</li>');

// Insérer $element_menu juste après la première balise </li>
if ($pos !== false) {
    // Insérer $element_menu après la balise </li> trouvée
    $items = substr_replace($items, $element_menu, $pos + strlen('</li>'), 0);
} else {
    // S'il n'y a pas de balise </li>, ajoutez simplement $element_menu à la fin
    $items .= $element_menu;
}

    }

    return $items;
}

// Rajouter le filtre pour ajouter l'élément de menu
add_filter('wp_nav_menu_items', 'ajouter_element_menu_admin', 10, 2);