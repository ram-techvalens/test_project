<?php

add_filter( 'wpas_plugin_settings', 'ascf_general_settings', 10, 1 );

/**
 * 
 * Add global custom fields settings section
 * 
 * @param array $settings
 * 
 * @return array
 */
function ascf_general_settings( $def ) {
	
	$settings = array(
		'ascf_Global_Settings' => array(
			'name'    => __( 'Core Custom Fields', 'wpas-cf' ),
			'options' => array(
			
				array(
					'name'    => __( 'Sort Order for Core Custom Fields', 'wpas-cf' ),
					'type'    => 'heading',
					'desc'    => __( 'Enter the numeric order in which the core custom fields will appear on the front end.  This only applies when the custom fields premium add-on is enabled. <br /> Please take into consideration the sort order that your other custom fields will have - they all work together to create a single master list of sorted custom fields! <br /> Requires version 4.4.0 or later of Awesome Support.', 'wpas-cf' ),
				),
				array(
					'name'    => __( 'Subject', 'wpas-cf' ),
					'id'      => 'ascf_sort_order_subject',
					'type'    => 'number',
					'default' => '1',
					'min'     => 0,
					'max'     => 999999
				),
				array(
					'name'    => __( 'Description', 'wpas-cf' ),
					'id'      => 'ascf_sort_order_description',
					'type'    => 'number',
					'default' => '2',
					'min'     => 0,
					'max'     => 999999
				),
				array(
					'name'    => __( 'Product', 'wpas-cf' ),
					'id'      => 'ascf_sort_order_product',
					'type'    => 'number',
					'default' => '3',
					'min'     => 0,
					'max'     => 999999
				),
				array(
					'name'    => __( 'Department', 'wpas-cf' ),
					'id'      => 'ascf_sort_order_dept',
					'type'    => 'number',
					'default' => '4',
					'min'     => 0,
					'max'     => 999999
				),
				array(
					'name'    => __( 'Priority', 'wpas-cf' ),
					'id'      => 'ascf_sort_order_priority',
					'type'    => 'number',
					'default' => '5',
					'min'     => 0,
					'max'     => 999999
				),
				array(
					'name'    => __( 'Public/Private Flag', 'wpas-cf' ),
					'id'      => 'ascf_sort_order_pubflag',
					'type'    => 'number',
					'default' => '6',
					'min'     => 0,
					'max'     => 999999,
					'desc'    => __( 'Only applies if the Public Tickets add-on is enabled', 'wpas-cf' ),					
				),
				array(
					'name'    => __( 'EDD Order Number', 'wpas-cf' ),
					'id'      => 'ascf_sort_order_eddorderno',
					'type'    => 'number',
					'default' => '7',
					'min'     => 0,
					'max'     => 999999,
					'desc'    => __( 'Only applies if the EDD add-on is enabled', 'wpas-cf' ),					
				),
				array(
					'name'    => __( 'EDD License', 'wpas-cf' ),
					'id'      => 'ascf_sort_order_eddlicense',
					'type'    => 'number',
					'default' => '8',
					'min'     => 0,
					'max'     => 999999,
					'desc'    => __( 'Only applies if the EDD add-on is enabled', 'wpas-cf' ),					
				),					
			)
		)
	);

	return array_merge( $def, $settings );

}
