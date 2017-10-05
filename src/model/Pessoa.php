<?php
namespace src\model;

class Pessoa {
	private $id;
	private $nome;
	private $idade;
	public function __construct($id, $nome, $idade) {
		$this->id = $id;
		$this->nome = $nome;
		$this->idade = $idade;
	}
	public function getID() {
		return $this->id;
	}
	public function setID($id) {
		$this->id = $id;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getIdade() {
		return $this->idade;
	}
	public function setIdade($idade) {
		$this->idade = $idade;
	}
	public function jsonSerialize() {
		return get_object_vars($this);
	}
}