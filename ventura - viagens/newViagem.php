<?php
require_once ('defesaadm.php');
require_once 'Viagens.php';
 
 $usuario = new Viagens();

 if (isset($_POST['cadastrar']) ):
                        
                        $local  = $_POST['local'];
                        $dia = $_POST['dia'];   
						$mes = $_POST['mes'];
						$ano = $_POST['ano'];
						$data = "$ano-$mes-$dia";
						$descricao = $_POST['descricao'];
						$localsaida  = $_POST['localsaida'];
                        $horasaida = $_POST['horasaida'];
						$horachegada = $_POST['horachegada'];
                        


						
                        $usuario->setLocal($local);
                        $usuario->setData($data);
						$usuario->setDescricao($descricao);
						$usuario->setLocalsaida($localsaida);
                        $usuario->setHorasaida($horasaida);
						$usuario->setHorachegada($horachegada);
						
						

			if($usuario->insert()){
				
				header('Location: paineladm.php'); 
			}
			endif
			
			
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
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
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
<center><br><br>
<form method="POST">
Local da Viagem:
<input name="local"  type="text" id="local" value=""/><br><br>
 <tr>
		 
             <td>Data da Viagem:</td> 
			 <td>
				 <select name = "dia">
				     <option value="">Selecione o dia</option>
				         <?php
				          for ($i=1; $i<=31; $i++){?>
				     <option value="<?php echo $i;?>"> <?php echo $i;}?></option>
				 </select>
				 
			  <select name="mes">
                  <option>Selecione...</option>
                  <option value="01">Janeiro  </option>
                  <option value="02">Fevereiro</option>
                  <option value="03">Março    </option>
                  <option value="04">Abril    </option>
                  <option value="05">Maio     </option>
                  <option value="06">Junho    </option>
                  <option value="07">Julho    </option>
                  <option value="08">Agosto   </option>
                  <option value="09">Setembro </option>
                  <option value="10">Outubro  </option>
                  <option value="11">Novembro </option>
                  <option value="12">Dezembro </option>

              </select>					 
	 <select name = "ano">
				     <option value="">Selecione o ano</option>
				         <?php
				          for ($i=2018; $i<=2020; $i++){?>
				     <option value="<?php echo $i;?>"> <?php echo $i;}?></option>
				 </select>	</td>

			 </tr><br><br>
			 
			 Informações sobre:
<input name="descricao"  type="text" id="descricao" value=""/><br><br>

 
 		 Local de Saida:
<input name="localsaida"  type="text" id="localsaida" value=""/><br><br>

 		 Hora de Saida:
<input name="horasaida"  type="text" id="horasaida" value="00:00"/><br><br>

 		 Hora de Chegada:
<input name="horachegada"  type="text" id="horachegada" value="00:00"/><br><br>



 <br>
 <input name="cadastrar" type="submit" class="btn btn-warning" value="Cadastrar">
</form>
 </center>
 </div>
  </div>
        </div>
      </section>
 </body>

</html>
