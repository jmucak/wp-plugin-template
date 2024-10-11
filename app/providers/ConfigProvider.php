<?php

namespace WpPluginTemplate\providers;

class ConfigProvider {
	protected static ?ConfigProvider $instance = null;
	public static $plugin_path = '';
	public static $plugin_url = '';
	public static $plugin_basename = '';

	private function __construct() {
	}

	final protected function __clone() {
	}

	public static function get_instance(): ?ConfigProvider {
		if ( null === self::$instance ) {
			self::$instance = new ConfigProvider();
		}

		return self::$instance;
	}

	public function set_plugin_paths( array $config ): void {
		self::$plugin_path     = $config['plugin_path'];
		self::$plugin_url      = $config['plugin_url'];
		self::$plugin_basename = $config['plugin_basename'];
	}

	public function get_plugin_path(): string {
		return self::$plugin_path;
	}

	public function get_plugin_url(): string {
		return self::$plugin_url;
	}

	public function get_plugin_basename(): string {
		return self::$plugin_basename;
	}

	public function get_plugin_slug(): string {
		return 'PLUGIN_URL';
	}
}