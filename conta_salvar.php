<?php 

include "config_bd.php";

$oab = $_POST["txtOAB"];
$nome = $_POST["txtNome"];
$email = $_POST["txtEmail"];
$cpf = $_POST["txtCPF"];

$sql = "INSERT INTO conta(oab,nome,email,cpf) 
VALUES('$oab','$nome','$email','$cpf')";

if(executarComando($sql)){
    echo "<h1>Sucesso</h1>";
}
else{
    echo "<h1>Erro</h1>";
}

?>