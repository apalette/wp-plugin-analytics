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

class WpPluginAnalyticsFront {
	
	public static function start() {
		add_action('wp_head', array('WpPluginAnalyticsFront', 'embedCode'));
	}
	
	public static function embedCode() {
		$code = get_option('wp-plugin-analytics-settings-code');
		
		if ($code && self::isAnalytics($code)) {
			echo "<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', '".$code."', 'auto');
  			ga('send', 'pageview');
			</script>";
		}
	}
	
	public static function isAnalytics($code){
		return preg_match('/^UA-\d{4,}-\d+$/', $code) ? true : false;
	}
}
?>