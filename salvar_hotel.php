<?php
require_once "conexao.php";

$nome = $_POST["nome"];
$cidade = $_POST["cidade"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$estrelas = $_POST["estrelas"];
  
$sql = "INSERT INTO hoteis(nome,cidade,email,senha,estrelas) 
VALUES ('$nome','$cidade','$email','$senha','$estrelas')";

if(mysqli_query($conexao,$sql)){

}
else{
    
}

?>