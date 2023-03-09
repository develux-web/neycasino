<?php

namespace classes;

class CustomPostTypes
{
    public function __construct(){
        add_action( 'init', [$this, 'casino'] );
        add_action( 'init', [$this, 'faq'] );
    }

    public function casino(): void{
        register_post_type('casino', array(
            'labels'             => array(
                'name'               => 'Casino',
                'singular_name'      => 'Casino',
                'add_new'            => 'Add Casino',
                'add_new_item'       => 'Add Casino',
                'edit_item'          => 'Edit Casino',
                'new_item'           => 'New Casino',
                'view_item'          => 'View Casino',
                'search_items'       => 'Search',
                'not_found'          => 'not found',
                'not_found_in_trash' => 'Not found in basket',
                'parent_item_colon'  => '',
                'menu_name'          => 'Casino'
            ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'menu_icon'          => 'dashicons-database',
            'capability_type'    => 'page',
            'has_archive'        => true,
            'hierarchical'       => true,
            'menu_position'      => null,
            'supports'           => array('title','editor','thumbnail','page-attributes')
        ) );
    }

    public function faq(): void{
        register_post_type('faq', array(
            'labels'             => array(
                'name'               => 'FAQ',
                'singular_name'      => 'FAQ',
                'add_new'            => 'Add FAQ',
                'add_new_item'       => 'Add FAQ',
                'edit_item'          => 'Edit FAQ',
                'new_item'           => 'New FAQ',
                'view_item'          => 'View FAQ',
                'search_items'       => 'Search',
                'not_found'          => 'not found',
                'not_found_in_trash' => 'Not found in basket',
                'parent_item_colon'  => '',
                'menu_name'          => 'FAQ'
            ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'menu_icon'          => 'dashicons-database',
            'capability_type'    => 'page',
            'has_archive'        => true,
            'hierarchical'       => true,
            'menu_position'      => null,
            'supports'           => array('title','editor')
        ) );
    }
}

new CustomPostTypes;
