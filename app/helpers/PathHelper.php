<?php

namespace wpPluginTemplate\helpers;

use wpPluginTemplate\providers\ConfigProvider;

class PathHelper {
	public static function get_partial_path( string $path ): string {
		return ConfigProvider::get_instance()->get_plugin_path() . 'partials/' . $path . '.php';
	}
}