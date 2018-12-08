<?php
session_start();
require_once ('conexao.php');
require_once ('Crud.php');
$salvar = new Crud();
$salvar->update($_POST['nome'],$_POST['email'],$_POST['data'], $_POST['cpf'],$_POST['curso'],$_POST['matricula'],$_POST['telefone'],$_POST['sexo']);
?>