<?php 
namespace src\service;
include 'src/model/Pessoa.php';
use src\model\Pessoa;

class PessoaService {
	public function getPessoa() {
		return new Pessoa( 1, "Melissa Vitoria Lourenco de Campos", 5);
	}
}
