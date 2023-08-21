<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Chargement du style.css du thème parent Blocksy
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

//Hook : éléments du menu

//string $hook_name, callable $callback, int $priority = 10, int $accepted_args = 1
//10 : plus haut niveau de priorité
//2 : nombre d'arguments

function add_admin_link($items, $args)
{
    if (is_user_logged_in()) {
        $items .= '<li id="order-button" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="' . get_admin_url() . '" class="ct-menu-link">Admin</a></li>';
    }

    return $items;
}

add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
