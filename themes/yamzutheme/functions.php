<?php

add_theme_support( 'post-thumbnails' ); 


/*
 *	Allow SVG uploads
 */

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/* 
 * Advanced Custom Fields Options Page
 */

if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page();
	acf_set_options_page_menu('Yamzu Theme Options');
}

/*
 *	Collect the token distribution values and store them to be passed to app.js
 */
function get_token_distribution_array() {

	$tokenDistributionValues = array(); //21
	$rows = get_field('token_distribution', 21);
	if($rows){
		foreach ($rows as $row) {
			array_push($tokenDistributionValues, $row['distribution_percentage']);
		}
	}
	return $tokenDistributionValues;
}

/*
 *	Collect the fund use values and store them to be passed to app.js
 */
function get_funds_array() {

	$fundValues = array(); //21
	$rows = get_field('use_of_funds', 21);
	if($rows){
		foreach ($rows as $row) {
			array_push($fundValues, $row['fund_percentage']);
		}
	}
	return $fundValues;
}

/*
 * Enqueue scripts and styles.
 */

function yamzu_scripts() {
	
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'yamzu_fontawesome', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css', array(), null );

	// Theme stylesheet.
	wp_enqueue_style( 'yamzu_style', get_theme_file_uri( '/assets/css/app.css' ) );

	wp_enqueue_script( 'yamzu_app_scripts', get_theme_file_uri( '/assets/js/app.js' ), array( 'jquery' ), '1.0', true );
	
	// Pass necessary PHP data to our script file
	wp_localize_script('yamzu_app_scripts', 'yamzu_app_vars', array(
			'particlesJsonPath' 		=> 	get_theme_file_uri( '/assets/json/particles.json' ),
			'tokenDistributionValues'	=>	json_encode(get_token_distribution_array()),
			'fundUseValues'				=> 	json_encode(get_funds_array())
		)
	);

	wp_enqueue_script( 'yamzu_scripts', get_theme_file_uri( '/assets/js/scripts.js' ), array( 'jquery' ), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'yamzu_scripts' );

/*
 *	Create custom post type for staff members
 */

function yamzu_create_posttype() {
 
    register_post_type( 'team-members',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Team Members' ),
                'singular_name' => __( 'Team Member' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'team'),
            'taxonomies' => array('team-department'),
        )
    );
}

add_action( 'init', 'yamzu_create_posttype' );

/*
 *	Create custom taxonomy for staff members
 */

function yamzu_themes_taxonomy() {  
    register_taxonomy(  
        'team-department',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
        'team-members',        //post type name
        array(  
            'hierarchical' => true,  
            'label' => 'Team Department',  //Display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'team-department', // This controls the base slug that will display before each term
                'with_front' => false // Don't display the category base before 
            )
        )  
    );  
}  
add_action( 'init', 'yamzu_themes_taxonomy');


