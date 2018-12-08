<?php
session_start();
require_once ('conexao.php');
$connect = mysqli_connect(host, user, pass, dbname);
if (empty($_POST['email']) || empty($_POST['senha'])){
	header ('Location: loginalunos.php');
	exit;   //estas 3 linhas servem para impedir o acesso direto por link
}
$email = mysqli_real_escape_string($connect, $_POST['email']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']); 

$id = "SELECT *FROM alunos where email = '$email' and senha = '$senha'";
$con = $connect->query($id) or die($connect->error);
$dadosid = $con->fetch_array();


$_SESSION['identificador'] = $dadosid["idAlunos"]; //fiz só pra usar no select´s futuros



$query = "SELECT * FROM alunos where email = '$email' and senha = '$senha' "; //verificação no banco
$resultado = mysqli_query($connect, $query); //neste momento nossa query já está sendo executado pelo banco
$row = mysqli_num_rows($resultado); //verificação 0/1

if ($row == 1){
	$_SESSION['email'] = $email;
	header('Location: painel.php');
	exit();
} else{
	header('Location: loginalunos.php');
	exit();
}
?>