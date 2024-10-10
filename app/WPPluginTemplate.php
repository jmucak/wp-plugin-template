<?php

namespace wpPluginTemplate;

use wpPluginTemplate\providers\AdminMenuProvider;
use wpPluginTemplate\providers\AssetProvider;

class WPPluginTemplate {
	public function init(): void {
		$this->register_services();
	}

	private function register_services(): void {
		add_action( 'admin_menu', array( new AdminMenuProvider(), 'register' ) );

		( new AssetProvider() )->register();
	}
}