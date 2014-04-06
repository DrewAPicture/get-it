<?php
/**
 * Class Get_It
 *
 * @package Get_It
 * @since 1.0
 */
class Get_It {

	/**
	 * Instance.
	 *
	 * @since 1.0
	 * @static
	 * @access public
	 *
	 * @return Get_It Instance.
	 */
	public static function get_instance() {
		static $_instance = false;

		if ( false === $_instance ) {
			$_instance = new Get_It();
			$_instance->hooks();
		}
		return $_instance;
	}

	/**
	 * Fire hooks.
	 *
	 * @since 1.0
	 * @access public
	 */
	public function hooks() {

	}

} // Get_It

$init = Get_It::get_instance();
