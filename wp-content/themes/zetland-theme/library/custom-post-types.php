<?php

/*------------------------------------*\
  Custom Post Types
\*------------------------------------*/


function create_post_type()
{
    // register_taxonomy_for_object_type('category', 'people'); // Register Taxonomies for Category
    // register_taxonomy_for_object_type('post_tag', 'people');

    register_post_type('Manifest', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Manifest', 'Manifest'), // Rename these to suit
            'singular_name' => __('Manifest', 'people'),
            'add_new' => __('Add New', 'Manifest'),
            'add_new_item' => __('Add New Manifest', 'editor'),
            'edit' => __('Edit', 'edit'),
            'edit_item' => __('Edit', 'edit'),
            'new_item' => __('New Manifest', 'Manifest'),
            'view' => __('View Manifest', 'viewManifest'),
            'view_item' => __('View Manifest', 'viewManifest'),
            'search_items' => __('Search Manifest', 'searchManifest'),
            'not_found' => __('No editors found', 'notfound'),
            'not_found_in_trash' => __('No editors found in Trash', 'notfound')
        ),
        'supports' => array('thumbnail'),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',

        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        // 'taxonomies' => array(
        //     'post_tag',
        //     'category'
        // ) // Add Category and Post Tags support
    ));

    register_post_type('Quote', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Quotes', 'Quotes'), // Rename these to suit
            'singular_name' => __('Quote', 'quote'),
            'add_new' => __('Add New', 'quote'),
            'add_new_item' => __('Add New quote', 'editor'),
            'edit' => __('Edit', 'edit'),
            'edit_item' => __('Edit', 'edit'),
            'new_item' => __('New quote', 'quote'),
            'view' => __('View quotes', 'viewMquote'),
            'view_item' => __('View quote', 'viewquote'),
            'search_items' => __('Search quotes', 'searchquotet'),
            'not_found' => __('No editors found', 'notfound'),
            'not_found_in_trash' => __('No editors found in Trash', 'notfound')
        ),
        'supports' => array('thumbnail'),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail'

        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        // 'taxonomies' => array(
        //     'post_tag',
        //     'category'
        // ) // Add Category and Post Tags support
    ));

    register_post_type('backers', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Backers', 'backers'), // Rename these to suit
            'singular_name' => __('Backers', 'backers'),
            'add_new' => __('Add New', 'backers'),
            'add_new_item' => __('Add New Backer', 'backers'),
            'edit' => __('Edit', 'edit'),
            'edit_item' => __('Edit', 'edit'),
            'new_item' => __('New Backer', 'backers'),
            'view' => __('View Backers', 'viewbackers'),
            'view_item' => __('View Backers', 'viewbackers'),
            'search_items' => __('Search Backers', 'searchbackers'),
            'not_found' => __('No editors found', 'notfound'),
            'not_found_in_trash' => __('No editors found in Trash', 'notfound')
        ),
        'supports' => array('thumbnail'),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        // 'taxonomies' => array(
        //     'post_tag',
        //     'category'
        // ) // Add Category and Post Tags support
    ));

    register_post_type('people', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('People', 'people'), // Rename these to suit
            'singular_name' => __('People', 'people'),
            'add_new' => __('Add New', 'Editor'),
            'add_new_item' => __('Add New Editor', 'editor'),
            'edit' => __('Edit', 'edit'),
            'edit_item' => __('Edit', 'edit'),
            'new_item' => __('New Editor', 'editor'),
            'view' => __('View People', 'viewpeople'),
            'view_item' => __('View People', 'viewpeople'),
            'search_items' => __('Search people', 'searchpeople'),
            'not_found' => __('No editors found', 'notfound'),
            'not_found_in_trash' => __('No editors found in Trash', 'notfound')
        ),
        'supports' => array('thumbnail'),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        // 'taxonomies' => array(
        //     'post_tag',
        //     'category'
        // ) // Add Category and Post Tags support
    ));

    register_post_type('qanda', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Q&A', 'qanda'), // Rename these to suit
            'singular_name' => __('Q&A', 'qanda'),
            'add_new' => __('Add New', 'qanda'),
            'add_new_item' => __('Add New Q&A', 'qanda'),
            'edit' => __('Edit', 'edit'),
            'edit_item' => __('Edit', 'edit'),
            'new_item' => __('New Q&A', 'qanda'),
            'view' => __('View Q&A', 'viewqanda'),
            'view_item' => __('View Q&A', 'viewqandae'),
            'search_items' => __('Search Q&A', 'searchqanda'),
            'not_found' => __('No editors found', 'notfound'),
            'not_found_in_trash' => __('No editors found in Trash', 'notfound')
        ),
        'supports' => array('thumbnail'),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        // 'taxonomies' => array(
        //     'post_tag',
        //     'category'
        // ) // Add Category and Post Tags support
    ));

}

add_action('init', 'create_post_type'); // Add our HTML5 Blank Custom Post Type

?>