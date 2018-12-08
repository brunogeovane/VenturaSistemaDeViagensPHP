<?php
require_once ('defesaaluno.php');
require_once ('conexao.php');
require_once ('Crud.php');
$perfil = new Crud();
$con = $perfil->find();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

<title>Ventura</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
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
            <a class="nav-link js-scroll-trigger" href="perfil.php">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="viagensabertas.php">Viagens Abertas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="viagensInscritas.php">Minhas Viagens</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="sair.php">Sair</a>
          </li>
        </ul>
      </div>
    </nav>
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
<table class="table" class="table-info" border="1px" cellpadding="0px" cellspacing="0px">
<?php if($perfil = $con){ ?>
			<form action='salvar.php' method='POST'>
			    <center>
                <tr>
			    <tr><td class="table-info">Nome
				<input name="nome" scope="row" type='text' value='<?php echo $perfil["nome"] ?>'</td>
				</tr>
				<tr>
				<td class="table-info">Email
				<input name="email" scope="row" type='email' value='<?php echo $perfil["email"] ?>'</td>
				</td></tr>
				<tr>
			    <tr><td class="table-info">Data
				<input name="data" scope="row" type='text' value='<?php echo $perfil["data"] ?>'</td>
				</tr>
				<tr>
				<td class="table-info">CPF
				<input name="cpf" scope="row" type='text' value='<?php echo $perfil["cpf"] ?>'</td>
				</td></tr>
				<tr>
			    <tr><td class="table-info">Curso
				<input name="curso" scope="row" type='text' value='<?php echo $perfil["curso"] ?>'</td>
				
				</tr>
				<tr>
				<td class="table-info">Matricula
				<input name="matricula" scope="row" type='text' value='<?php echo $perfil["matricula"] ?>'</td>
				</td></tr>
				<tr>
			    <tr><td class="table-info">Telefone
				<input name="telefone" scope="row" type='text' value='<?php echo $perfil["telefone"] ?>'</td>
				</tr>
				<tr>
				<td class="table-info">Sexo
				<input name="sexo" scope="row" type='text' value='<?php echo $perfil["sexo"] ?>'</td>
				</td></tr>
				
				<td>
				<input class="table-danger" scope="row" type='submit' value='Salvar'><br>
				</td>
		   </form>
 <?php } ?>
</table>
</body></section></html>