<?php
 require_once "conexao.php";

 $sql = "SELECT 
reservas.id,
clientes.nome AS nome_cliente,
 clientes.telefone,
 quartos.numero,
 reservas.data_entrada, 
 reservas.data_saida 
FROM reservas 
JOIN clientes ON reservas.cliente_id = clientes.id
JOIN quartos ON reservas.quarto_id = quartos.id WHERE quartos.id_hotel = 1";

$resultado = mysqli_query($conexao,$sql);

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas Confirmadas </title>
</head>
<body>
   <h2>Painel de Reservas dos Quartos</h2> 
   <table>
        <tr>
            <th>Cód.Reserva</tr>
            <th>Quarto</tr>
            <th>Hóspede</th>
            <th>Telefone</th>
            <th>Data de Entrega (Check-in)</tr>
            <th>Data Saída (Check-in)</tr>
        </tr>

        <tr>
            <?php
            while($linha = mysqli_fetch_assoc($resultado)){
                echo "<tr>
                        <td>".$linha['id']."</td>
                        <td>".$linha['numero']."</td>
                        <td>".$linha['nome_cliente']."</td>
                        <td>".$linha['telefone']."</td>
                        <td>".$linha['data_entrada']."</td>
                        <td>".$linha['data_saida']."</td>
                </tr>";
            }
            ?>
        </tr>
    </table>   
    <a href="cadastrar_quarto.html">Clique aqui para cadastrar novos quartos</a>
    <br>
    <a href="logout.php">Clique aqui para sair do sistema</a>
</body>
</html>
           