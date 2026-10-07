 <?php
session_start();
 require_once "conecao.php";
 
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha_organizada = password_verify($senha);

$sql = "SELECT * FROM clientes WHERE email = '$email' and senha = '$senha'";

$resultado mysqli_query($conexao,$sql);


if(mysqli_num_rows($resultado) > 0){
    while($linha = mysqli_fetch_assoc($resultado)){
        $_SESSION['cliente_id'] = $linha['id'];
        $_SESSION['logado'] = true;
        header("location:minhas_reservas.php");
        exit();
    }
 
}else {
    header("location: login_cliente.html");
    exit;
}
 ?>