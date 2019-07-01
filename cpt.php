<?php

// CREATES CUSTOM POST TYPE
add_filter( 'orbit_post_type_vars', function( $post_types ){

	$post_types['projects'] = array(
		'slug' 		=> 'projects',
		'labels'	=> array(
			'name' 					=> 'Projects',
			'singular_name' => 'Project',
      'add_new'       => 'Add New',
      'add_new_item'  => 'Add New Project',
      'all_items'     =>  'All Projects'
		),
		'public'		=> true,
		'supports'	=> array( 'title', 'editor','thumbnail' )
	);

	$post_types['events'] = array(
		'slug' 		=> 'events',
		'labels'	=> array(
			'name' 					=> 'Events',
			'singular_name' => 'Event',
      'add_new'       => 'Add New',
      'add_new_item'  => 'Add New Event',
      'all_items'     => 'All Events'
		),
		'menu_icon'	=> 'dashicons-format-gallery',
		'public'		=> true,
		'supports'	=> array( 'title', 'editor','thumbnail' )
	);

	return $post_types;
} );

add_action( 'init', function(){
  register_taxonomy_for_object_type( 'post_tag', 'projects' );
  register_taxonomy_for_object_type( 'category', 'events' );
  register_taxonomy_for_object_type( 'post_tag', 'events' );
} );

add_filter( 'orbit_taxonomy_vars', function( $taxonomies ){

  $taxonomies['project-group']	= array(
    'label'			=> 'Project Group',
    'slug' 			=> 'project-group',
    'post_types'	=> array( 'projects' )
  );
		return $taxonomies;
} );
