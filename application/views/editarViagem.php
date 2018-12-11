<?php
session_start();
require_once ('conexao.php');
require_once ('Crud.php');
$listar = new Crud();
$listar->findAllViagensUpdate($_POST['iddaviagem']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

<title>Ventura</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">
</head>
  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#">
        <span class="d-block d-lg-none">Ventura</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
		 <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="viagemadm.php">viagem</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#.php">Cadastrar Viagens</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Minhas Viagens</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="sair.php">Sair</a>
          </li>
        </ul>
      </div>
    </nav>
 <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
<table class="table" class="table-info" border="1px" cellpadding="0px" cellspacing="0px">



<?php 
foreach(Crud::findAllViagensUpdate() as $viagem){
?>  
			<form action='salvaradm.php' method='POST'>
			    <center>
                <tr>
			    <tr><td class="table-info">Local
				<input name="local" scope="row" type='text' value='<?php echo $viagem["local"] ?>'</td>
				</tr>
				<tr>
				<td class="table-info">Local de Saida
				<input name="localsaida" scope="row" type='localsaida' value='<?php echo $viagem["localsaida"] ?>'</td>
				</td></tr>
				<tr>
			    <tr><td class="table-info">Data
				<input name="data" scope="row" type='text' value='<?php echo $viagem["data"] ?>'</td>
				</tr>
				<tr>
				<td class="table-info">Descricão
				<input name="descricao" scope="row" type='text' value='<?php echo $viagem["descricao"] ?>'</td>
				</td></tr>
				<tr>
				<tr><td class="table-info">Hora Saida
				<input name="horasaida" scope="row" type='text' value='<?php echo $viagem["horasaida"] ?>'</td>
				</tr>
				<tr>
				<td class="table-info">Hora Chegada
				<input name="horachegada" scope="row" type='text' value='<?php echo $viagem["horachegada"] ?>'</td>
				</td></tr>
				<tr>
			   
				<td>
				<input class="table-danger" scope="row" type='submit' value='Salvar'><br>
				</td>
		   </form>
 <?php } ?>
</table>
</body></section></html>


