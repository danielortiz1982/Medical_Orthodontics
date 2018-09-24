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