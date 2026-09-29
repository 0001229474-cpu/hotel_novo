<?php
require_once "conexao.php";

$sql = "SELECT 
reservas.id,AS id_reservas,
hoteis.nome AS nome_hotel,
 quartos.tipo,
 quartos.preco_diaria,
 reservas.data_entrada, 
 reservas.data_saida 
FROM reservas 
JOIN quartos ON reservas.quarto_id = quarto.id
JOIN hoteis ON quartos.hotel_id = hoteis.i";

$resultado = mysqli_query($conexao,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Minhas Reservas Confirmadas </h2> 
   <table>
        <tr>
            <th>Cod. Reserva</tr>
            <th>Nome Hotel</tr>
            <th>Tipo do Quarto</tr>
            <th>Diária</tr>
            <th>Data de Entrega (Check-in)</tr>
            <th>Data Saída (Check-in)</tr>
        </tr>

        <tr>
            <?php
            while($linha = mysqli_fetch_assoc($resultado)){
                echo "<tr>
                        <td>".$linha['id_reservas']."</td>
                        <td>".$linha['nome_hotel']."</td>
                        <td>".$linha['tipo']."</td>
                        <td>".$linha['preco_diaria']."</td>
                        <td>".$linha['data_entrada']."</td>
                        <td>".$linha['data_saida']."</td>
                </tr>";
            }
            ?>
        </tr>

   </table>
   <a href="listar_hoteis.php">Clique aqui para novas reservas</a>
</body>
</html>