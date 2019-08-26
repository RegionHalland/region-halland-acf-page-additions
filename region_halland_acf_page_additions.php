<?php

	/**
	 * @package Region Halland ACF Page Additions
	 */
	/*
	Plugin Name: Region Halland ACF Page Additions
	Description: ACF-fält för tillägg till en sida
	Version: 1.2.0
	Author: Roland Hydén
	License: MIT
	Text Domain: regionhalland
	*/

	// Anropa function om ACF är installerad
	add_action('acf/init', 'my_acf_add_page_ingress_field_groups');

	// Function för att lägga till "field groups"
	function my_acf_add_page_ingress_field_groups() {

		if (function_exists('acf_add_local_field_group')):

			acf_add_local_field_group(array(
			    'key' => 'group_1000239',
			    'title' => ' ',
			    'fields' => array(
			        0 => array(
			        	'key' => 'field_3000001',
					    'label' => 'Granskare av dokumentet',
			            'name' => 'name_3000002',
			            'type' => 'textarea',
			            'instructions' => __('Granskare'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => __('', 'regionhalland'),
			            'maxlength' => '',
			            'rows' => 6,
			            'new_lines' => '',
			        ),
			        1 => array(
			        	'key' => 'field_3000003',
					    'label' => 'Fastställare av dokumentet',
			            'name' => 'name_3000004',
			            'type' => 'textarea',
			            'instructions' => __('Fastställare'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => __('', 'regionhalland'),
			            'maxlength' => '',
			            'rows' => 6,
			            'new_lines' => '',
			        ),
			        2 => array(
			        	'key' => 'field_3000005',
					    'label' => 'Delblock 1',
			            'name' => 'name_3000006',
			            'type' => 'textarea',
			            'instructions' => __('Extra information'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => __('', 'regionhalland'),
			            'maxlength' => '',
			            'rows' => 4,
			            'new_lines' => '',
			        ),
			        3 => array(
			        	'key' => 'field_3000007',
					    'label' => 'Delblock 2',
			            'name' => 'name_3000008',
			            'type' => 'textarea',
			            'instructions' => __('Extra information'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => __('', 'regionhalland'),
			            'maxlength' => '',
			            'rows' => 4,
			            'new_lines' => '',
			        ),
			        4 => array(
			        	'key' => 'field_3000009',
					    'label' => 'Delblock 3',
			            'name' => 'name_3000010',
			            'type' => 'textarea',
			            'instructions' => __('Extra information'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => __('', 'regionhalland'),
			            'maxlength' => '',
			            'rows' => 4,
			            'new_lines' => '',
			        ),
			    ),
			    'location' => array(
			        0 => array(
			            0 => array(
			                'param' => 'post_type',
			                'operator' => '==',
			                'value' => 'page',
			            ),
			        )
			    ),
			    'menu_order' => 0,
			    'position' => 'normal',
			    'style' => 'default',
			    'label_placement' => 'top',
			    'instruction_placement' => 'label',
			    'hide_on_screen' => '',
			    'active' => 1,
			    'description' => '',
			));

		endif;
	
	}

	 	// Lägg till kolumner som ska hämtas ut
 	function add_region_halland_acf_page_additions_pages_columns($columns) {
   		return array_merge ($columns, array ( 
     		'name_3000002' => __ ( 'Granskare' ),
     		'name_3000004' => __ ( 'Fastställare' )
     		) 
   		);
 	}
 	add_filter ('manage_pages_columns', 'add_region_halland_acf_page_additions_pages_columns' );

	// Lägg till kolumner som ska hämtas ut
 	function region_halland_acf_oage_additions_pages_custom_column($column, $post_id) {
   		switch ($column) {
     		case 'name_3000002':
     			$myGranskare = get_field('name_3000002', $post_id);
       			echo $myGranskare;
       			break;
     		case 'name_3000004':
     			$myFaststallare = get_field('name_3000004', $post_id);
       			echo $myFaststallare;
       			break;
     	}
 	}
 	add_action ('manage_pages_custom_column', 'region_halland_acf_oage_additions_pages_custom_column', 10, 2 );


	// Metod som anropas när pluginen aktiveras
	function region_halland_acf_page_additions_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_acf_page_additions_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_acf_page_additions_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_acf_page_additions_deactivate');

?>