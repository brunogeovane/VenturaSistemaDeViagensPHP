<?php
session_start();
if (empty($_SESSION["identificador"])) {
	header ('Location: loginalunos.php');
	exit; 
}
?>	