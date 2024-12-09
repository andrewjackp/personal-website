<?php 

function getFile($path) {
		return dirname(__FILE__) . '/' . $path;
	} 

function getFileAndInclude($path) {
		include(getFile($path));
	}

function getData($path) {

	//check if file exists..
	// file_exists...

	$json = file_get_contents($path);
	$data = json_decode($json, true);

	return $data;
}

function enableErrorReporting() {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}
enableErrorReporting();

function show($things) {
	echo "<code class='show-code'>";

		echo '<pre>';
		print_r($things);
		echo '</pre>';	

	echo '</code>';
}

function queryString() {
	return $_SERVER('QUERY_STRING');
}

function styleGuideDetailLink($type){
	if ($page == "style-guide") {
		$link = "?page=module&slug=$type";
		echo "<a href='$link' target='$type'>LINK</a>";
	}
}

/* No Longer using these below functions, getCurrentPageSlug (--  in router.php --) is accomplishing the same thing */

function pageClass($page) {
	$page = "";
	return "$page-page";
}

function pageTemplateClass($pageData) {
	$pageData = "home";
	if ( isset($pageData["template"]) ) {
		return "$pageData[template]-template";
	} else {
		return "default-template";
	}
}