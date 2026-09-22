<?php
 require_once "conexao.php";

 $sql = "SELECT * FROM quartos";

 $resultado = mysqli_query($conexao,$sql);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset ="UTF-8">
    <title>Quartos Cadastrados</titlea>
</head>