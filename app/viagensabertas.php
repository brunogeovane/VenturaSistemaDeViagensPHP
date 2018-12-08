<?php
require_once ('defesaaluno.php');
require_once ('conexao.php');
require_once ('Crud.php');
//var_dump($viagem);
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

 <center>  
<table class="table">
  <thead>
    <tr>
      <th scope="col">Viagens Abertas</th><br>

      <th scope="col"></th>
    </tr>
  </thead>
  
  
   <tbody> 
<?php 

foreach(Crud::findAllViagens() as $viagem){
	


?>  

    
    <tr>
      <th class="table-warning" scope="viagem">Local</th>
      <td><?php echo $viagem['local'] ?></td>
       <th class="table-warning" scope="viagem">Data</th>
      <td><?php echo $viagem["data"] ?><br></td>
      
    </tr>
	
	<tr>
      <th class="table-warning" scope="viagem">Descrição</th>
      <td><?php echo $viagem["descricao"] ?></td>
      <th class="table-warning" scope="viagem">Local de Saida</th>
      <td><?php echo $viagem["localsaida"] ?></td>
    </tr>

	<tr>
      <th class="table-warning" scope="viagem">Hora de Saida</th>
      <td><?php echo $viagem["horasaida"] ?></td>
      <th class="table-warning" scope="viagem">Hora de Chegada</th>
      <td><?php echo $viagem["horachegada"] ?></td>
    </tr>
	<tr>
	<tr>
    <td>
<form action='salvarnatabela.php' method='POST'>
<input type="checkbox" name="iddaviagem" value="<?php echo $viagem["idViagem"] ?>"> Selecione está viagem 
     </td>
	 <td><br><input class="btn btn-success" scope="row" type='submit' value='Realizar Inscrição'><br><hr><br></td>
     </tr>
    </tr>
	</form>

	
  </tbody>
    


 <?php } ?>

</table></center>

</section>
</html>