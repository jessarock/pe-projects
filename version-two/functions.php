
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

function getData($filePath) {
	// get the file 
	$json = file_get_contents($filePath);
	// convert the file to php 
	$phpDecoded = json_decode($json, true);
	// return the php 
	return $phpDecoded;

}

