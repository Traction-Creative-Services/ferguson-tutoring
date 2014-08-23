<?php

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_action('init', 'cptui_register_my_cpt_testimonial');
function cptui_register_my_cpt_testimonial() {
register_post_type('testimonial', array(
'label' => 'Testimonials',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'testimonial', 'with_front' => true),
'query_var' => true,
'exclude_from_search' => true,
'supports' => array('title','editor','revisions'),
'labels' => array (
  'name' => 'Testimonials',
  'singular_name' => 'Testimonial',
  'menu_name' => 'Testimonials',
  'add_new' => 'Add Testimonial',
  'add_new_item' => 'Add New Testimonial',
  'edit' => 'Edit',
  'edit_item' => 'Edit Testimonial',
  'new_item' => 'New Testimonial',
  'view' => 'View Testimonial',
  'view_item' => 'View Testimonial',
  'search_items' => 'Search Testimonials',
  'not_found' => 'No Testimonials Found',
  'not_found_in_trash' => 'No Testimonials Found in Trash',
  'parent' => 'Parent Testimonial',
)
) ); }