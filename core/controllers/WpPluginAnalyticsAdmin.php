<?php
/**
 * Wp Plugin Analytics Admin Controller
 *
 * PHP 5
 *
 * @author  aurelie.palette
 * @version 1.0 
 * @since   10/08/2015
 */

class WpPluginAnalyticsAdmin {
	
	public static function start() {
		if (is_admin()){
			add_action('admin_menu', array('WpPluginAnalyticsAdmin', 'createMenu'));
  			add_action('admin_init', array('WpPluginAnalyticsAdmin', 'createSettings'));
		}
	}
	
	public static function createMenu() {
		add_options_page('Analytics', 'Analytics', 'manage_options', 'wp-plugin-analytics', array('WpPluginAnalyticsAdmin', 'createPage'));
	}
	
	public static function createPage() {
		require_once WP_PLUGIN_ANALYICS_CORE.'views/admin-options.php';
	}
	
	public static function createSettings() {
		register_setting('wp-plugin-analytics-settings', 'wp-plugin-analytics-settings-code');
	}
}
?>