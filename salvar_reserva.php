<?php
require_once 'conexao.php';

$id_cliente = $_POST['id_cliente'];
$id_quarto = $_POST['id_quarto'];
$data_entrada = $_POST['date_entrada'];
$data_saida = $_POST['data_saida'];

$sql = "INSERT INTO reservas (cliente_ id, quarto_id, data_entrada, data_saida, total) 
VALUES ($id_cliente,$id_quarto,'$data_entrada','$data_saida',100)";

if(mysqli_query($conexao,$sql)){
    echo "Reserva salva com SUCESSO!";
}else {
    echo "Não foi possível salva sua reserva.";
    echo "<a href='ver_quartos.php'>Tenta novemente</a>";
}
?>