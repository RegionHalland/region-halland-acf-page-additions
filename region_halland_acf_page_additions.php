<?php

	/**
	 * @package Region Halland ACF Page Additions
	 */
	/*
	Plugin Name: Region Halland ACF Page Additions
	Description: ACF-fält för tillägg till en sida
	Version: 1.0.0
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
			        	'key' => 'field_1000246',
					    'label' => 'www.regionhalland.se',
			            'name' => 'name_1000247',
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
			        1 => array(
			        	'key' => 'field_1000248',
					    'label' => 'www.vardgivare.regionhalland.se',
			            'name' => 'name_1000249',
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
			        2 => array(
			        	'key' => 'field_1000250',
					    'label' => 'www.intra.regionhalland.se',
			            'name' => 'name_1000251',
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
						'key' => 'field_1000240',
					    'label' => 'www.regionhalland.se',
					    'name' => 'name_1000241',
					    'type' => 'wysiwyg',
					    'instructions' => 'Extra information',
					    'required' => 0,
					    'conditional_logic' => 0,
					    'wrapper' => [
					        'width' => '',
					        'class' => '',
					        'id' => '',
					    ],
					    'default_value' => '',
					    'toolbar' => 'basic',
					    'tabs' => 'text',
					    'media_upload' => 0,
					    'delay' => 0,
					),
			        4 => array(
						'key' => 'field_1000242',
					    'label' => 'www.vardgivare.regionhalland.se',
					    'name' => 'name_1000243',
					    'type' => 'wysiwyg',
					    'instructions' => 'Extra information',
					    'required' => 0,
					    'conditional_logic' => 0,
					    'wrapper' => [
					        'width' => '',
					        'class' => '',
					        'id' => '',
					    ],
					    'default_value' => '',
					    'toolbar' => 'basic',
					    'tabs' => 'text',
					    'media_upload' => 0,
					    'delay' => 0,
					),
			        5 => array(
						'key' => 'field_1000244',
					    'label' => 'www.intra.regionhalland.se',
					    'name' => 'name_1000245',
					    'type' => 'wysiwyg',
					    'instructions' => 'Extra information',
					    'required' => 0,
					    'conditional_logic' => 0,
					    'wrapper' => [
					        'width' => '',
					        'class' => '',
					        'id' => '',
					    ],
					    'default_value' => '',
					    'toolbar' => 'basic',
					    'tabs' => 'text',
					    'media_upload' => 0,
					    'delay' => 0,
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