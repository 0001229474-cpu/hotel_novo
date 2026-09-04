<?php

$host = "localhost";
$usuario = "root";
<<<<<<< HEAD
$senha = "";
=======
$senha ="";
>>>>>>> 9999289995521070f0d711fe464433e213a0a7fb
$banco = "hotel_db";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if($conexao){
<<<<<<< HEAD
    echo "Conectou ao banco de dados<br>";
}else{
    echo "Não conectou ao banco de dados<br>";
}
?>
=======
    echo "conectou ao banco de dados";
} else {
    echo "Nao conectou ao banco de dados";
}
>>>>>>> 9999289995521070f0d711fe464433e213a0a7fb
