<?php
include('../modules/MvcModule/Controller.class');
$controller = ucfirst($page->template->name);
if(isset($urlSegments[1])){
	$action = $urlSegments[1];
}else{
	$action = 'index';
}