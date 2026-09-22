<?php
   require_once "conexao.php";

   $id_hotel = $_POST['id_hotel'];
   $numero_quarto = $_POST['numero_quarto'];
   $tipo = $_POST['tipo'];
   $preco = $_POST['preco'];

   $sql = "INSERT INTO quartos (id_hotel, numero_quarto, tipo, preco, disponivel)
VALUES ($id_hotel, '$numero_quarto', '$tipo', $preco, 1)";

if(mysqli_query($conexao,$sql)){
    echo "Quarto cadastrado com sucesso!";
    echo "<a href='cadastrar_quarto.html'>Voltar</a>";
}else{
    "Erro ao cadastra o Quarto:";
}


?>