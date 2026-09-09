 <?php
 include "conecao.php"s;
 
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM clientes WHERE email = '$email';
$resultado = mysqli_query
($conexao,$sql);

if(mysqli_num_rows($resultado) > 0){
$cliente = mysqli_fetch_assoc($resultado);

if($senha == $cliente["senha"]){
$resultado = ["email"] = $email;
header("localion:minhas_recervas.php");}

else{
    acho"senha errada!";
    acho"<br><a hret='login.html'>Voltar</a>";
}
else{
    acho"E-mail nao encontrado!";
    acho"

    ?>