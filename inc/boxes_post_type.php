<?php

function register_boxes() {
        $labels = array(
            'name'              => _x( 'Boxy', 'post type general name' ),
            'singular_name'     => _x( 'Boxy', 'post type singular name' ),
            'add_new'           => __( 'Add New Box' ),
            'add_new_item'      => __( 'Add New Box' ),
            'edit_item'         => __( 'Edit Box' ),
            'new_item'          => __( 'New Box' ),
            'view_item'         => __( 'View Box' ),
            'search_items'      => __( 'Search Box' ),
            'not_found'         => __( 'Box' ),
            'not_found_in_trash'=> __( 'Box' ),
            'parent_item_colon' => __( 'Box' ),
            'menu_name'         => __( 'Boxy' )
        );
 
        $taxonomies = array();
 
        $supports = array('title','thumbnail');
 
        $post_type_args = array(
            'labels'            => $labels,
            'singular_label'    => __('Boxy'),
            'public'            => true,
            'show_ui'           => true,
            'publicly_queryable'=> true,
            'query_var'         => true,
            'capability_type'   => 'post',
            'has_archive'       => false,
            'hierarchical'      => false,
            'rewrite'           => array( 'slug' => 'slides', 'with_front' => false ),
            'supports'          => $supports,
            'menu_position'     => 27, // Where it is in the menu. Change to 6 and it's below posts. 11 and it's below media, etc.
            'menu_icon'         => get_template_directory_uri() . '/inc/slider/images/icon.png',
            'taxonomies'        => $taxonomies
        );
        register_post_type('boxes',$post_type_args);
    }

    add_action('init', 'register_boxes');
