 <?php
require_once ('defesaadm.php');
require_once ('conexao.php');
require_once ('Crud.php');
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
            <a class="nav-link js-scroll-trigger" href="perfiladm.php">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="newViagem.php">Cadastrar Viagens</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="viagem.php">Minhas Viagens</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="sair.php">Sair</a>
          </li>
        </ul>
      </div>
    </nav>
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">

 <center>  
<table class="table">
  <thead>
    <tr>
    <th scope="col">Alunos Inscritos</th><br>
    </tr>
  </thead>
  
  
   <tbody> 
<?php 

foreach(Crud::Inscritos($_GET['id']) as $alunos){
?>  
    <tr>
      <th class="table-warning" scope="viagem">Nome</th>
      <td><?php echo $alunos['nome'] ?></td>
	   <th class="table-warning" scope="viagem">Data</th>
      <td><?php echo $alunos["data"] ?></td>
       <th class="table-warning" scope="viagem">Matricula</th>
      <td><?php echo $alunos["matricula"] ?></td>
      
    </tr>

	 
    

	
  </tbody>
    


 <?php } ?>
<br><input class="btn btn-dark" scope="row" type='submit' value='Baixar PDF'>
</table></center>
</section>
</html>