<?php
/* @title allow data images
 * @description Permit images with src="data:image/..."
 * @author Henry Kroll www.thenerdshow.com
 * @license GPL2
 */

elgg_register_plugin_hook_handler('validate', 'input', '_allow_data_image', 500);
function _allow_data_image($hook, $type, $result, $params = null) {
	return str_replace("denied:data:image/","data:image/",$result);
}
