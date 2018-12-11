 <?php
session_start();
require_once ('conexao.php');
require_once ('Crud.php');
$delete = new Crud();
$delete->deleteInscricao($_POST['iddaviagem']);
header("Location: viagensinscritas.php");
?>