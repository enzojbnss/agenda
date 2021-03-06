<?php
namespace src\view;
class Page{
	
	private $raiz;
	private $corpo;
	private $controller;
	private $action;
	
	public function __construct($url,$base = "Layout.php"){
		$folder = $url [0];
		$className = strtoupper(substr($folder, 0,1)).substr($folder, 1);
		if(count($url)>1)$actionName = $url [1];
		else $actionName = "index";
		$this->corpo = "src/view/".$folder."/".$actionName.".php";
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