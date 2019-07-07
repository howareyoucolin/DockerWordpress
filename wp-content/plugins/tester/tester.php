<?php
/**
* Plugin Name: Tester Plugin
* Plugin URI: https://www.369usa.com/
* Description: This is a plugin merely for study and used as a tester 
* Version: 1.0
* Author: Colin Zhao
* Author URI: hhttps://www.369usa.com/
**/

//Security
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if(true){
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}

require_once( plugin_dir_path( __FILE__ ).'class.fields.php' );
use tester\fields;

if( isset( $_GET['header'] ) ) {
	$object = new tester\fields\Fields;
	$object->updateHeader($_GET['header']);
}

//Adding an option page:
function tester_create_option_page() {
	if( function_exists('acf_add_options_page') ) {
		$option_page = acf_add_options_page(array(
			'page_title' 	=> 'Tester Options',
			'menu_title' 	=> 'Tester Options',
			'menu_slug' 	=> 'tester_options',
			'capability' 	=> 'edit_posts',
			'position' => 3,
			'redirect' 	=> false
		));
	}
	if( function_exists('acf_add_local_field_group') ):
		acf_add_local_field_group(array(
			'key' => 'group_5d1f771eaf87a',
			'title' => 'Tester Group',
			'fields' => array(
				array(
					'key' => 'field_5d1f771fd0bfe',
					'label' => 'Header Text',
					'name' => 'header_text',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5d1ff5a423c8a',
					'label' => 'Tester Content',
					'name' => 'tester_content',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => 16,
					'new_lines' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'tester_options',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
		));
	endif;
}
	
//Adding text to frontend:
function tester_func() {
	$header = get_field('header_text', 'option');
	$content = get_field('tester_content', 'option');
	echo $header . ' --- ' . $content;
}

//Add actions to hook:
add_action('admin_init', 'tester_create_option_page',10,0);
add_action('admin_menu', 'tester_create_option_page',10,0);
add_action('tester_plugin_hook','tester_func',10,0);
