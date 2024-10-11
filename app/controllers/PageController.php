<?php

namespace WpPluginTemplate\controllers;

use jmucak\wpTemplateLoaderPack\TemplateLoader;
use wpPluginTemplate\helpers\PathHelper;

class PageController {
	public function get_main_view(): void {
		$file_path = PathHelper::get_partial_path( 'main' );

		TemplateLoader::get_instance()->get_partial( $file_path );
	}

	public function get_sub_menu_view(): void {
		$file_path = PathHelper::get_partial_path( 'submenu' );

		TemplateLoader::get_instance()->get_partial( $file_path );
	}
}