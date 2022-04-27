<?php
/*
 * Create custom post type
 * */
add_action('init', 'init_post_types');
function init_post_types()
{
    register_post_type('events', array(
        'label' => null,
        'labels' => array(
            'name' => 'Мероприятия',
            'singular_name' => 'Мероприятия',
            'add_new' => 'Добавить мероприятие',
            'add_new_item' => 'Добавить',
            'edit_item' => 'Редактировать',
            'new_item' => 'Новое мероприятие',
            'view_item' => 'Просмотр',
            'search_items' => 'Поиск',
            'not_found' => 'Не найдено',
            'not_found_in_trash' => 'В корзине не найдено',
            'parent_item_colon' => '',
            'menu_name' => 'Мероприятия',
        ),
        'description' => '',
        'public' => true,
        'publicly_queryable' => null,
        'exclude_from_search' => null,
        'show_ui' => null,
        'show_in_menu' => true,
        'show_in_admin_bar' => null,
        'show_in_nav_menus' => null,
        'show_in_rest' => true,
        'rest_base' => null,
        'menu_position' => 4,
        'menu_icon' => null,
        'hierarchical' => true,
        'supports' => array('title', 'author', 'revisions'),
        'taxonomies' => array(),
        'has_archive' => true,
        'rewrite' => array('slug' => 'events-post'),
        'query_var' => true,
        'menu_icon' => 'dashicons-groups'
    ));


}