<?php
include 'src/service/PessoaService.php';
use src\service\PessoaService;
class pessoaController {
	private $page;
	
	public function __construct($page) {
		$this->page = $page;
	}
	public function index() {
		$servico = new PessoaService ();
		$pessoa = $servico->getPessoa ();
		echo '<script type="text/javascript">';
		echo 'var nome = "' . $pessoa->getNome () . '"';
		echo '</script>';
		include $this->page->getRaiz();
	}
	public function nova() {
		echo "ola nova pessoa";
		$servico = new PessoaService ();
		$pessoa = $servico->getPessoa ();
		$obj = json_encode($pessoa);
		echo var_dump($obj);
	}
}


