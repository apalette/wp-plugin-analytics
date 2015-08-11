<?php

// The plugin can't be called directly
if (! function_exists('add_action')) {
    exit();
}

// Admin
require_once WP_PLUGIN_ANALYICS_CORE.'controllers/WpPluginAnalyticsAdmin.php';
WpPluginAnalyticsAdmin::start();

?>