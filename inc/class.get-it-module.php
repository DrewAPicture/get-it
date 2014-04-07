<?php
/**
 * Class Get_It_Module
 *
 * @package Get_It
 * @subpackage Modules
 * @since 1.0
 */
class Get_It_Module {

	public $name = '';

	public function __construct( $args = array() ) {
		$args = wp_parse_args( $args, array(
			'name' => ''
		) );

		$this->name = $args['name'];
	}


} // Get_It_Module
