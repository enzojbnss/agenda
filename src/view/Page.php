<?php
namespace src\view;
class Page{
	
	private $raiz;
	private $corpo;
	private $controller;
	private $action;
	
	public function __construct($url,$base = "Layout.php"){
		$className = $url [0];
		if(count($url)>1)$actionName = $url [1];
		else $actionName = "index";
		$this->corpo = "src/view/".$className."/".$actionName.".php";
		if($base==null)$this->raiz = $this->corpo;
		else $this->raiz = "src/view/".$base;
		$this->controller = $className;
		$this->action = $actionName;
	}
	
	public function getRaiz(){
		return $this->raiz;
	}
	
	public function getCorpo(){
		return $this->corpo;
	}
	
	public function getController(){
		return $this->controller;
	}
	
	public function getAction(){
		return $this->action;
	}
}