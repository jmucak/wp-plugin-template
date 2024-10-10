<?php

namespace wpPluginTemplate\providers;

use wpPluginTemplate\controllers\PageController;

class AdminMenuProvider {
	private string $capability = 'manage_options';

	public function register(): void {
		$this->register_main_page();
		$this->register_sub_page();
	}

	/**
	 * @url https://developer.wordpress.org/reference/functions/add_menu_page/
	 */
	private function register_main_page(): void {
		add_menu_page(
			'WP plugin template Menu page',
			'WP plugin template menu page title',
			$this->capability,
			PLUGIN_SLUG_SLUG,
			array( new PageController(), 'get_main_view' ),
			'dashicons-chart-pie',
			100
		);
	}

	/**
	 * @url https://developer.wordpress.org/reference/functions/add_submenu_page/
	 */
	private function register_sub_page(): void {
		add_submenu_page(
			PLUGIN_SLUG_SLUG,
			'WP plugin template Sub page',
			'WP plugin template Sub page title',
			$this->capability,
			PLUGIN_SLUG_SLUG . '-submenu',
			array( new PageController(), 'get_sub_menu_view' ),
			100
		);
	}


}