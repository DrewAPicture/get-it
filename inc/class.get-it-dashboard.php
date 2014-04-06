<?php
/**
 * Class Get_It_Dashboard
 */
class Get_It_Dashboard {

	/**
	 * Instance.
	 *
	 * @since 1.0
	 * @static
	 * @access public
	 *
	 * @return Get_It_Dashboard Instance.
	 */
	public static function get_instance() {
		static $_instance = false;

		if ( false === $_instance ) {
			$_instance = new Get_It_Dashboard();
			$_instance->hooks();
		}
		return $_instance;
	}

	/**
	 * Hooks.
	 *
	 * @since 1.0
	 * @access public
	 */
	public function hooks() {
		remove_action( 'welcome_panel', 'wp_welcome_panel' );

		add_action( 'welcome_panel', array( $this, 'dashboard_display' ) );
	}

	/**
	 * Dashboard display callback.
	 *
	 * @since 1.0
	 * @access public
	 */
	public function dashboard_display() {
		echo 'Something goes here';
	}

} // Get_It_Dashboard

$init = Get_It_Dashboard::get_instance();
