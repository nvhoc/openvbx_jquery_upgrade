<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/** 
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 **/

$jquery_validate = '../j/plugins/jquery.validate.js';

$sources = array(
	'css' => array(
		'../c/reset-fonts-grids-2.8.css',
		'../c/global.css',
		'../c/login.css',
		'../c/utility-menu.css',
		'../c/context-menu.css',
		'../c/navigation.css',
		'../c/content.css',
		'../c/forms.css',
		'../c/buttons.css',
		'../c/controls.css',
		'../c/plugin.css',
		'../c/messages.css',
		'../c/devices.css',
		'../c/voicemail.css',
		'../c/admin.css',
		'../c/flows.css',
		'../c/applet.css',
		'../c/jplayer.css',
		'../c/uploadify.css',
		'../c/timePicker.css',
		'../c/client.css',
	),
	'js' => array(
		'../j/soundmanager2/soundmanager2.js',
		'../j/swfupload/swfupload.js',
		'../j/swfupload/swfupload.cookies.js',
		'../j/modal-tabs.js',
		'../j/plugins/json.js',
		$jquery_validate,
		'../j/plugins/call-and-sms-dialogs.js',
		'../j/plugins/flicker.js',
		'../j/plugins/jquery.ba-hashchange.js',
		'../j/plugins/jquery.livequery.js',
		'../j/plugins/buttonista.js',
		'../j/plugins/jquery.animateToClass.js',
		'../j/plugins/static.js',
		'../j/plugins/jquery.swfupload.js',
		'../j/plugins/jquery.tabify.js',
		'../j/plugins/jquery.timePicker.min.js',
		'../j/global.js',
		'../j/sound.js',
		'../j/pickers.js',
		'../j/messages.js',
		'../j/update-check.js'
	),
	'iframejs' => array(
		'../j/iframe.js',
		'../j/client.js'	
	),
	'installjs' => array(
		$jquery_validate,
		'../j/steps.js',
		'../j/install.js'
	),
	'upgradejs' => array(
		$jquery_validate,
		'../j/steps.js',
		'../j/upgrade.js'		
	),
	'loginjs' => array(
		'../j/plugins/json.js',
		$jquery_validate,
		'../j/global.js'
	)
);

$extra_sources = '../../OpenVBX/config/asset-sources.php';
if (is_file($extra_sources))
{
	@include_once($extra_sources);
}

return $sources;