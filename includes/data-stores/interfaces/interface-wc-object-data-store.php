<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * WC Data Store Interface
 *
 * @version  2.7.0
 * @category Interface
 * @author   WooThemes
 */
interface WC_Object_Data_Store {
	/**
	 * Method to create a new record of a WC_Data based object.
	 * @param WC_Data
	 */
	public function create( &$data );

	/**
	 * Method to read a record. Creates a new WC_Data based object.
	 * @param WC_Data
	 */
	public function read( &$data );

	/**
	 * Updates a record in the database.
	 * @param WC_Data
	 */
	public function update( &$data );

	/**
	 * Deletes a record from the database.
	 * @param  WC_Data
	 * @param  array $args Array of args to pass to the delete method.
	 * @return bool result
	 */
	public function delete( &$data, $args = array() );

	/**
	 * Returns an array of meta for an object.
	 * @param  WC_Data
	 * @return array
	 */
	public function read_meta( &$data );

	/**
	 * Deletes meta based on meta ID.
	 * @param  WC_Data
	 * @param  stdClass (containing at least ->id)
	 * @return array
	 */
	public function delete_meta( &$data, $meta );

	/**
	 * Add new piece of meta.
	 * @param  WC_Data
	 * @param  stdClass (containing ->key and ->value)
	 * @return meta ID
	 */
	public function add_meta( &$data, $meta );

	/**
	 * Update meta.
	 * @param  WC_Data
	 * @param  stdClass (containing ->id, ->key and ->value)
	 */
	public function update_meta( &$data, $meta );
}
