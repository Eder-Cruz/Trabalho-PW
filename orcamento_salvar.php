<?php 

include "config_bd.php"; 

$nome = $_POST["txtNome"];
$cpf = $_POST["txtCPF"];
$email = $_POST["txtEmail"];
$telefone = $_POST["txtTelefone"];
$turno = $_POST["txtTurno"];
$varaprocessual = $_POST["txtVara"];
$descricaoprocesso = $_POST["txtDescricao"];

$sql = "INSERT INTO orcamento(nome,cpf,email,telefone,turno,varaprocessual,descricaoprocesso) 
VALUES('$nome','$cpf','$email','$telefone','$turno','$varaprocessual','$descricaoprocesso')";

if(executarComando($sql)){
    echo "<h1>Sucesso</h1>";
}
else{
    echo "<h1>Erro</h1>";
}

?>