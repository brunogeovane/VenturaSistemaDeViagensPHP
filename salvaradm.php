<?php
session_start();
require_once ('conexao.php');
require_once ('Crud.php');
$salvar = new Crud();
$salvar->updateAdm($_POST['nome'],$_POST['email'],$_POST['matricula'], $_POST['telefone']);
?>