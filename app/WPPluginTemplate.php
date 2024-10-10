<?php

namespace wpPluginTemplate;

use wpPluginTemplate\providers\AssetProvider;

class WPPluginTemplate {
	public function init(): void {
		$this->register_services();
	}

	private function register_services(): void {
		( new AssetProvider() )->register();
	}
}