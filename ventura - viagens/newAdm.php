<?php
 require_once 'Adms.php';
 
 $usuario = new Adms();

 if (isset($_POST['cadastrar']) ):
                        
                        $email  = $_POST['email'];
                        $senha = $_POST['senha'];
						$nome = $_POST['nome'];
						$matricula  = $_POST['matricula'];
                        $telefone = $_POST['telefone'];
						$nivel = $_POST['nivel'];
                        


						
                        $usuario->setEmail($email);
                        $usuario->setSenha($senha);
						$usuario->setNome($nome);
						$usuario->setMatricula($matricula);
                        $usuario->setTelefone($telefone);
						$usuario->setNivel($nivel);
						
						

			if($usuario->insert()){
				
				header('Location: loginadm.php'); 
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
            <a class="nav-link js-scroll-trigger" href="index.html">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="loginalunos.php">Aluno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="loginadm.php">Administrador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="sobre.html">Sobre</a>
          </li>
        </ul>
      </div>
    </nav>
<center><br><br>
<form method="POST">
Nome:
<input name="nome"  type="text" id="nome" value=""/><br><br>
Telefone:
<input name="telefone" type="text" id="telefone" value=""/><br><br>
Matricula:
<input name="matricula" type="text" id="matricula" value=""/><br><br>
Email:
<input name="email" type="email" id="email" value=""/><br><br>
Senha:
<input name="senha" type="password" id="password" value=""/><br><br>

Nível:<select name="nivel">
<option value="1">1</option>
</select><br>

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
