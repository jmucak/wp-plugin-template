<?php

namespace wpPluginTemplate;

class WPPluginTemplate {
	public function init() : void {
		add_action( 'wp_enqueue_scripts', array( $this, 'add_scripts' ) );
	}

	public function add_scripts(): void {
		wp_enqueue_style( PLUGIN_SLUG_SLUG, PLUGIN_SLUG_LOCAL_URL . 'static/dist/style.css', null, '1.0.0', false );
		wp_enqueue_script( PLUGIN_SLUG_SLUG, PLUGIN_SLUG_LOCAL_URL . 'static/dist/bundle.js', null, '1.0.0', true );
	}
}