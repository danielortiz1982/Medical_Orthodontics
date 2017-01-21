<?php

add_action('init','add_payment_taxonomy');
function add_payment_taxonomy(){
	
    $taxonomy    = 'payment';
    $object_type = 'doctors';
    
    $labels = array(
        'name'               => 'Payment Method',
        'singular_name'      => 'Payment',
        'search_items'       => 'Search Payments',
        'all_items'          => 'All Payment Methods',
        'parent_item'        => 'Parent Payment Method',
        'parent_item_colon'  => 'Parent Payment Method:',
        'update_item'        => 'Update Payment Method',
        'edit_item'          => 'Edit Payment Method',
        'add_new_item'       => 'Add New Payment Method', 
        'new_item_name'      => 'New Payment Method',
        'menu_name'          => 'Payment Method'
    );
     
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'how_in_nav_menus'  => true,
        'public'            => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'payment')
    );

    register_taxonomy($taxonomy, $object_type, $args); 
}
// end of add_payment_taxonomy


add_action('init','add_insurance_taxonomy');
function add_insurance_taxonomy(){
    $taxonomy    = 'insurance';
    $object_type = 'doctors';
    
    $labels = array(
        'name'               => 'Insurance Accepted',
        'singular_name'      => 'Insurance Accepted',
        'search_items'       => 'Search Insurance',
        'all_items'          => 'All Insurance Accepteds',
        'parent_item'        => 'Parent Insurance Accepted',
        'parent_item_colon'  => 'Parent Insurance Accepted:',
        'update_item'        => 'Update Insurance Accepted',
        'edit_item'          => 'Edit Insurance Accepted',
        'add_new_item'       => 'Add New Insurance Accepted', 
        'new_item_name'      => 'New Insurance Accepted',
        'menu_name'          => 'Insurance Accepted'
    );
     
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'how_in_nav_menus'  => true,
        'public'            => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'insurance')
    );

    register_taxonomy($taxonomy, $object_type, $args); 
}
// end of add_insurance_taxonomy


add_action('init','add_associations_taxonomy');
function add_associations_taxonomy(){
    $taxonomy    = 'associations';
    $object_type = 'doctors';
    
    $labels = array(
        'name'               => 'Associations',
        'singular_name'      => 'Association',
        'search_items'       => 'Search Associations',
        'all_items'          => 'All Associations',
        'parent_item'        => 'Parent Association',
        'parent_item_colon'  => 'Parent Association:',
        'update_item'        => 'Update Association',
        'edit_item'          => 'Edit Association',
        'add_new_item'       => 'Add New Association', 
        'new_item_name'      => 'New Association',
        'menu_name'          => 'Association'
    );
     
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'how_in_nav_menus'  => true,
        'public'            => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'associations')
    );

    register_taxonomy($taxonomy, $object_type, $args); 
}
// end of add_associations_taxonomy

add_action('init','add_cases_taxonomy');
function add_cases_taxonomy(){
    $taxonomy    = 'cases';
    $object_type = array('patient_testimonials', 'before_and_after', 'video');; 
    
    $labels = array(
        'name'               => 'Cases',
        'singular_name'      => 'Case',
        'search_items'       => 'Search Cases',
        'all_items'          => 'All Cases',
        'parent_item'        => 'Parent Case',
        'parent_item_colon'  => 'Parent Case:',
        'update_item'        => 'Update Case',
        'edit_item'          => 'Edit Case',
        'add_new_item'       => 'Add New Case', 
        'new_item_name'      => 'New Case',
        'menu_name'          => 'Case'
    );
     
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'how_in_nav_menus'  => true,
        'public'            => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'cases')
    );

    register_taxonomy($taxonomy, $object_type, $args); 
}
// end of add_cases_taxonomy

add_action('init','add_video_categories_taxonomy');
function add_video_categories_taxonomy(){
    $taxonomy    = 'video_categories';
    $object_type = 'video';
    
    $labels = array(
        'name'               => 'Video Categories',
        'singular_name'      => 'Video Category',
        'search_items'       => 'Search Video Categories',
        'all_items'          => 'All Video Categories',
        'parent_item'        => 'Parent Video Category',
        'parent_item_colon'  => 'Parent Video Category:',
        'update_item'        => 'Update Video Category',
        'edit_item'          => 'Edit Video Category',
        'add_new_item'       => 'Add New Video Category', 
        'new_item_name'      => 'New Video Category',
        'menu_name'          => 'Video Categories'
    );
     
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'how_in_nav_menus'  => true,
        'public'            => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'video_categories')
    );

    register_taxonomy($taxonomy, $object_type, $args); 
}
// end of add_video_categories_taxonomy