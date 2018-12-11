  <?php
session_start();
require_once ('conexao.php');
require_once ('Crud.php');
$delete = new Crud();
$delete->DeleteViagem($_GET['id']);
header("Location: viagem.php");
?>