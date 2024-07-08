<?php
/**
 * Plugin Class.
 *
 * @package my-basic-plugin
 */

namespace MyBasicPlugin;

/**
 * Class Plugin.
 */
class Plugin {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->init();
	}

	public function activate() {}

	public function deactivate() {}

	/**
	 * Initialize plugin
	 */
	private function init() {
		define( 'MY_BASIC_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __DIR__ ) ) );
		define( 'MY_BASIC_PLUGIN_URL', untrailingslashit( plugin_dir_url( __DIR__ ) ) );
		define( 'MY_BASIC_PLUGIN_BUILD_PATH', MY_BASIC_PLUGIN_PATH . '/assets/build' );
		define( 'MY_BASIC_PLUGIN_BUILD_URL', MY_BASIC_PLUGIN_URL . '/assets/build' );
		define( 'MY_BASIC_PLUGIN_VERSION', '1.0.0' );

		new Assets();
		// new Patterns();
		// new SearchApi();
	}
}
