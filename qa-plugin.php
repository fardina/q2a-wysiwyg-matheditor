<?php
/*
	Plugin Name: MathEditor
	Plugin URI: 
	Plugin Description: MathEditor
	Plugin Version: 1.0.0
	Plugin Date: 2013-12-30
	Plugin Author: Thibault Duponchelle
	Plugin Author URI: http://www.ti-84-plus.com/
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5.1
	Plugin Update Check URI: 
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

qa_register_plugin_module('editor', 'qa-matheditor.php', 'qa_matheditor', 'MathEditor');

/*
	Omit PHP closing tag to help avoid accidental output
*/
