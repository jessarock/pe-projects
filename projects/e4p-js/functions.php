<?php 

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
