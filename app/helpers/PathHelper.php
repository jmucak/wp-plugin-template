<?php

namespace wpPluginTemplate\helpers;

class PathHelper {
	public static function get_partial_path( string $path ): string {
		return PLUGIN_SLUG_LOCAL_PATH . 'partials/' . $path . '.php';
	}
}