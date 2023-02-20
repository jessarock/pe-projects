
<?php 

function enableErrorReporting() {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}
enableErrorReporting();


function formatCode($code) {
	echo "<code class='show-code'>";
		echo '<pre>';
			print_r($code);
		echo '</pre>';
	echo '</code>';
}

function queryString() {
	return $_SERVER['QUERY_STRING'];
}

function getFile($path) {
	return dirname(__FILE__) . '/' . $path;
}