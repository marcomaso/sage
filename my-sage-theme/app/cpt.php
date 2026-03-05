<?php

namespace App;

/**
 * Register the custom post type for Rooms
 */
add_action('init', function () {
    $labels = [
        'name'                  => _x('Rooms', 'Post Type General Name', 'sage'),
        'singular_name'         => _x('Room', 'Post Type Singular Name', 'sage'),
        'menu_name'             => __('Rooms', 'sage'),
        'name_admin_bar'        => __('Room', 'sage'),
        'archives'              => __('Room Archives', 'sage'),
        'attributes'            => __('Room Attributes', 'sage'),
        'parent_item_colon'     => __('Parent Room:', 'sage'),
        'all_items'             => __('All Rooms', 'sage'),
        'add_new_item'          => __('Add New Room', 'sage'),
        'add_new'               => __('Add New', 'sage'),
        'new_item'              => __('New Room', 'sage'),
        'edit_item'             => __('Edit Room', 'sage'),
        'update_item'           => __('Update Room', 'sage'),
        'view_item'             => __('View Room', 'sage'),
        'view_items'            => __('View Rooms', 'sage'),
        'search_items'          => __('Search Room', 'sage'),
        'not_found'             => __('Not found', 'sage'),
        'not_found_in_trash'    => __('Not found in Trash', 'sage'),
        'featured_image'        => __('Room Featured Image', 'sage'),
        'set_featured_image'    => __('Set room featured image', 'sage'),
        'remove_featured_image' => __('Remove room featured image', 'sage'),
        'use_featured_image'    => __('Use as room featured image', 'sage'),
        'insert_into_item'      => __('Insert into room', 'sage'),
        'uploaded_to_this_item' => __('Uploaded to this room', 'sage'),
        'items_list'            => __('Rooms list', 'sage'),
        'items_list_navigation' => __('Rooms list navigation', 'sage'),
        'filter_items_list'     => __('Filter rooms list', 'sage'),
    ];
    $args = [
        'label'                 => __('Room', 'sage'),
        'description'           => __('Hotel Rooms and Suites', 'sage'),
        'labels'                => $labels,
        'supports'              => ['title', 'editor', 'thumbnail', 'revisions', 'custom-fields'],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-building',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true, // Enable Gutenberg editor
    ];
    register_post_type('room', $args);
});
