<?php

namespace wpPluginTemplate;

use wpPluginTemplate\providers\AdminMenuProvider;
use wpPluginTemplate\providers\AssetProvider;
use wpPluginTemplate\providers\ConfigProvider;

class WPPluginTemplate {
	public function init( array $config = array() ): void {
		ConfigProvider::get_instance()->set_plugin_paths( $config );
		$this->register_services();
	}

	private function register_services(): void {
		add_action( 'admin_menu', array( new AdminMenuProvider(), 'register' ) );

		( new AssetProvider() )->register();
	}
}