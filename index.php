<?php
include 'src/view/Page.php';
use src\view\Page;
$page = new Page(explode ( "/", $_GET ['url'] ));
$className = $page->getController() . 'Controller';
include_once 'src/controller/' . $className . '.php';
$controller = new $className($page);
$action = $page->getAction();
$controller->$action();

?>

