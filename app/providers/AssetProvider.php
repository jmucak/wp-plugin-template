<?php

namespace WpPluginTemplate\providers;

use jmucak\wpAssetServicePack\AssetService;

class AssetProvider {
	public function register(): void {
		$config_provider = ConfigProvider::get_instance();

		$asset_service = new AssetService( array(
			'base_url'  => $config_provider->get_plugin_url() . '/static/',
			'base_path' => $config_provider->get_plugin_path() . '/static/',
		) );

//		$asset_service->register_site_assets( $this->get_site_assets_config() );
		$asset_service->register_admin_assets( $this->get_admin_assets_config() );
//		$asset_service->register_editor_assets( $this->get_editor_assets_config() );
	}

	private function get_site_assets_config(): array {
		return array(
			'js'  => array(
				'wpPluginTemplateBundle' => array(
					'path'           => 'dist/bundle.js',
					'version'        => '1.0.0',
					'timestamp_bust' => true,
				),
			),
			'css' => array(
				'wpPluginTemplateMainCSS' => array(
					'path'           => 'dist/style.css',
					'in_footer'      => false,
					'version'        => '1.0.0',
					'timestamp_bust' => true,
				),
			),
		);
	}

	private function get_admin_assets_config(): array {
		return array(
			'js'  => array(
				'wpPluginTemplateAdminBundle' => array(
					'path'           => 'dist/admin.js',
					'version'        => '1.0.0',
					'timestamp_bust' => true,
				),
			),
			'css' => array(
				'wpPluginTemplateAdminCSS' => array(
					'path'           => 'dist/style.css',
					'in_footer'      => false,
					'version'        => '1.0.0',
					'timestamp_bust' => true,
				),
			),
		);
	}

	private function get_editor_assets_config(): array {
		return array(
			'js'  => array(
				'wpPluginTemplateEditorBundle' => array(
					'path'           => 'dist/editor.js',
					'version'        => '1.0.0',
					'timestamp_bust' => true,
				),
			),
			'css' => array(
				'wpPluginTemplateEditorCSS' => array(
					'path'           => 'dist/style.css',
					'in_footer'      => false,
					'version'        => '1.0.0',
					'timestamp_bust' => true,
				),
			),
		);
	}
}