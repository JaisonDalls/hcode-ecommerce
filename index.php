<?php 

require_once("vendor/autoload.php");
use \Slim\Slim;
use \Hcode\Page;//adicionado conforme recomendado.

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});

$app->run();

 ?>