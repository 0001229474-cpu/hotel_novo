<?php
 require_once "conexao.php";

$id_hotel = $_GET['id_hotel'];

$sql = "SELECT * FROM quartos WHERE id_hotel = '$id_hotel'and disponivel = 1 ";
$resultado = mysqli_query($conexao,$sql);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Quarto Disponível</title>
</head>
<body>

    <h2>Quartos Disponíveis no Hotel Selecionado</h2>
    <table>
        <tr>
            <th>Número</th>
            <th>Tipo</th>
            <th>Preço</th>
        </tr>
        <?php while($quarto = mysqli_fetch_assoc($resultado)){
            echo"<tr>
                   <td>".$quarto['numero']."</>
                   <td>".$quarto['tipo']."</>
                   <td>".$quarto['preco_diaria']."</>           
                </tr>";
        }   
        ?>
    </table>

    <form action="salvar_reserva.php" method="post">
        <label for="id_cliente">ID do Cliente</label>
        <input type="number" id="id_cliente" name="id_cliente">
        <br><br>  
        <label for="id_cliente">ID do Quarto</label>
        <input type="number" id="id_quarto" name="id_quarto">
        <br><br>
        <label for="id_cliente">Data de Entrada</label>
        <input type="date " id="data_entrada" name="date_entrada">
        <br><br>
        <label for="id_cliente">Data de Saída</label>
        <input type="date" id="data_saida" name="data_saida">
        <br><br>

        <button class="button_ver_quartos">CONFIRMAR RESERVA</B></button>
        
</form>
</body>
</html>