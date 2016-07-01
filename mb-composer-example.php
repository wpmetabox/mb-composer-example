<?php
/**
 * Plugin Name: MB Composer Example
 * Plugin URI: https://metabox.io
 * Description: An example for using Meta Box with Composer.
 * Version: 1.0
 * Author: Rilwis
 * Author URI: http://www.deluxeblogtips.com
 * License: GPL2
 */

require plugin_dir_path( __FILE__) . 'vendor/autoload.php';

add_filter( 'rwmb_meta_boxes', 'mb_composer_example_register_meta_boxes' );

/**
 * Register meta boxes.
 *
 * @link https://metabox.io/docs/
 *
 * @param $meta_boxes
 *
 * @return array
 */
function mb_composer_example_register_meta_boxes( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'A sample meta box', 'mb-composer-example' ),
		'fields' => array(
			array(
				'name' => __( 'Name', 'mb-composer-example' ),
				'id'   => 'name',
				'type' => 'text',
			),
			array(
				'name' => __( 'Bio', 'mb-composer-example' ),
				'id'   => 'bio',
				'type' => 'wysiwyg',
			),
		),
	);

	return $meta_boxes;
}
