<?php 

require_once("vendor/autoload.php");
use \Slim\Slim;
use \Horas\Page;
$app = new Slim();

$app->get('/', function(){
	$page = new Page();
	$page->setTpl("index");

});

// Run app
$app->run();
 ?>