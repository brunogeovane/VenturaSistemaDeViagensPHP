<?php
session_start();
if (empty($_SESSION["identificadoradm"])) {
	header ('Location: loginadm.php');
	exit; 
}
?>	