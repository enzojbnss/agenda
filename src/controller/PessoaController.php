<?php
include 'src/service/PessoaService.php';
use src\service\PessoaService;
class PessoaController {
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
		include $this->page->getRaiz ();
	}
	public function nova() {
		$servico = new PessoaService ();
		$pessoa = $servico->getPessoa ();
		header("Content-type:application/json");
		echo json_encode($pessoa->jsonSerialize());
	}
}


