<div class="wrap">
	<h2>Google Analytics</h2>
	<form method="post" action="options.php"> 
	<?php settings_fields('wp-plugin-analytics-settings'); ?>
	<?php do_settings_sections('wp-plugin-analytics-settings'); ?>
	<table class="form-table">
		<tr valign="top">
        	<th scope="row"><label for="wp-plugin-analytics-settings-code">Tracking ID</label></th>
        	<td><input name="wp-plugin-analytics-settings-code" id="wp-plugin-analytics-settings-code" value="<?php echo esc_attr(get_option('wp-plugin-analytics-settings-code')); ?>" placeholder="UA-XXXX-X" /></td>
        </tr>
	</table>
	<?php submit_button(); ?>
	</form>
</div>