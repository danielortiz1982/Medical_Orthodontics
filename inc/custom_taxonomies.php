<?php
// add_action('init','add_sample_taxonomy');
// function add_sample_taxonomy(){
    
//     $taxonomy    = 'sample_taxonomy';
//     $object_type = 'sample';
    
//     $labels = array(
//         'name'               => 'Sample Taxonomy',
//         'singular_name'      => 'Sample Taxonomy',
//         'search_items'       => 'Search Sample Taxonomys',
//         'all_items'          => 'All Sample Taxonomys',
//         'parent_item'        => 'Parent Sample Taxonomy',
//         'parent_item_colon'  => 'Parent Sample Taxonomy:',
//         'update_item'        => 'Update Sample Taxonomy',
//         'edit_item'          => 'Edit Sample Taxonomy',
//         'add_new_item'       => 'Add New Sample Taxonomy', 
//         'new_item_name'      => 'New Sample Taxonomy',
//         'menu_name'          => 'Sample Taxonomy'
//     );
     
//     $args = array(
//         'labels'            => $labels,
//         'hierarchical'      => true,
//         'show_ui'           => true,
//         'how_in_nav_menus'  => true,
//         'public'            => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'rewrite'           => array('slug' => 'sampletaxonomy')
//     );

//     register_taxonomy($taxonomy, $object_type, $args); 
// }
// end of add_sample_taxonomy


// add_action('init','add_payment_taxonomy');
// function add_payment_taxonomy(){
	
//     $taxonomy    = 'payment';
//     $object_type = 'doctors';
    
//     $labels = array(
//         'name'               => 'Payment Method',
//         'singular_name'      => 'Payment',
//         'search_items'       => 'Search Payments',
//         'all_items'          => 'All Payment Methods',
//         'parent_item'        => 'Parent Payment Method',
//         'parent_item_colon'  => 'Parent Payment Method:',
//         'update_item'        => 'Update Payment Method',
//         'edit_item'          => 'Edit Payment Method',
//         'add_new_item'       => 'Add New Payment Method', 
//         'new_item_name'      => 'New Payment Method',
//         'menu_name'          => 'Payment Method'
//     );
     
//     $args = array(
//         'labels'            => $labels,
//         'hierarchical'      => true,
//         'show_ui'           => true,
//         'how_in_nav_menus'  => true,
//         'public'            => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'rewrite'           => array('slug' => 'payment')
//     );

//     register_taxonomy($taxonomy, $object_type, $args); 
// }
// // end of add_payment_taxonomy


// add_action('init','add_insurance_taxonomy');
// function add_insurance_taxonomy(){
//     $taxonomy    = 'insurance';
//     $object_type = 'doctors';
    
//     $labels = array(
//         'name'               => 'Insurance Accepted',
//         'singular_name'      => 'Insurance Accepted',
//         'search_items'       => 'Search Insurance',
//         'all_items'          => 'All Insurance Accepteds',
//         'parent_item'        => 'Parent Insurance Accepted',
//         'parent_item_colon'  => 'Parent Insurance Accepted:',
//         'update_item'        => 'Update Insurance Accepted',
//         'edit_item'          => 'Edit Insurance Accepted',
//         'add_new_item'       => 'Add New Insurance Accepted', 
//         'new_item_name'      => 'New Insurance Accepted',
//         'menu_name'          => 'Insurance Accepted'
//     );
     
//     $args = array(
//         'labels'            => $labels,
//         'hierarchical'      => true,
//         'show_ui'           => true,
//         'how_in_nav_menus'  => true,
//         'public'            => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'rewrite'           => array('slug' => 'insurance')
//     );

//     register_taxonomy($taxonomy, $object_type, $args); 
// }
// // end of add_insurance_taxonomy

// add_action('init','add_associations_taxonomy');
// function add_associations_taxonomy(){
//     $taxonomy    = 'associations';
//     $object_type = 'doctors';
    
//     $labels = array(
//         'name'               => 'Associations',
//         'singular_name'      => 'Association',
//         'search_items'       => 'Search Associations',
//         'all_items'          => 'All Associations',
//         'parent_item'        => 'Parent Association',
//         'parent_item_colon'  => 'Parent Association:',
//         'update_item'        => 'Update Association',
//         'edit_item'          => 'Edit Association',
//         'add_new_item'       => 'Add New Association', 
//         'new_item_name'      => 'New Association',
//         'menu_name'          => 'Association'
//     );
     
//     $args = array(
//         'labels'            => $labels,
//         'hierarchical'      => true,
//         'show_ui'           => true,
//         'how_in_nav_menus'  => true,
//         'public'            => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'rewrite'           => array('slug' => 'associations')
//     );

//     register_taxonomy($taxonomy, $object_type, $args); 
// }
// // end of add_associations_taxonomy

// add_action('init','add_specialties_taxonomy');
// function add_specialties_taxonomy(){
//     $taxonomy    = 'specialties';
//     $object_type = 'doctors';
    
//     $labels = array(
//         'name'               => 'Specialties',
//         'singular_name'      => 'Specialties',
//         'search_items'       => 'Search Specialties',
//         'all_items'          => 'All Specialties',
//         'parent_item'        => 'Parent Specialties',
//         'parent_item_colon'  => 'Parent Specialties:',
//         'update_item'        => 'Update Specialties',
//         'edit_item'          => 'Edit Specialties',
//         'add_new_item'       => 'Add New Specialties', 
//         'new_item_name'      => 'New Specialties',
//         'menu_name'          => 'Specialties'
//     );
     
//     $args = array(
//         'labels'            => $labels,
//         'hierarchical'      => true,
//         'show_ui'           => true,
//         'how_in_nav_menus'  => true,
//         'public'            => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'rewrite'           => array('slug' => 'specialties')
//     );

//     register_taxonomy($taxonomy, $object_type, $args); 
// }
// // end of add_specialties_taxonomy