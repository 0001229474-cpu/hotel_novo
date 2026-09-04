<?php

<<<<<<< HEAD
require_once 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['tel'];
$senha = $_POST['senha'];

$sql = "INSERT INTO clientes (nome, email, telefone, senha)
VALUES ('$nome', '$email', '$telefone', '$senha')";

if(mysqli_query($conexao,$sql)){
    echo "<br>Cadastro realizado com sucesso!";
}else{
    echo "<br>Error 404";
}

?>
=======
require_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];

$sql = "INSERT INTO clientes (nome, email, telefone, senha)
        VALUES ('$nome', '$email', '$telefone', '$senha')";

if (mysqli_query($conexao, $sql)) {
   
} else {
    
}

?>
>>>>>>> 9999289995521070f0d711fe464433e213a0a7fb
