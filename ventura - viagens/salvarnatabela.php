<?php
session_start();
require_once ('conexao.php');
require_once ('Crud.php');
$iddoaluno = $_SESSION['identificador'];
$salvar = new Crud();
$salvar->insertTabela($_POST['iddaviagem'], $iddoaluno);
header("Location: viagensinscritas.php");
?>