<?php
include 'src/service/PessoaService.php';
use src\service\PessoaService;

echo "src<br/>";
$Mensagem = "Hello world!<br/>";
echo $Mensagem;
$servico = new PessoaService();
$pessoa = $servico->getPessoa();
echo "id : ".$pessoa->getID()."<br/>";
echo "nome : ".$pessoa->getNome()."<br/>";
echo "idade : ".$pessoa->getIdade()."anos<br/>";
?>

