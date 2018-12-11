<?php
 require_once 'Usuarios.php';
 
 $usuario = new Usuarios();

 if (isset($_POST['cadastrar']) ):
                        
                        $email  = $_POST['email'];
                        $senha = $_POST['senha'];
                        $nome = $_POST['nome'];
						$dia = $_POST['dia'];   
						$mes = $_POST['mes'];
						$ano = $_POST['ano'];
						$data = "$ano-$mes-$dia";
						$curso = $_POST['curso'];
						$sexo = $_POST['sexo'];
						$cpf = $_POST['cpf'];
						$telefone = $_POST['telefone'];
						$matricula = $_POST['matricula'];


						
                        $usuario->setEmail($email);
                        $usuario->setSenha($senha);
						$usuario->setNome($nome);
						$usuario->setData($data);
						$usuario->setCurso($curso);
						$usuario->setSexo($sexo);
						$usuario->setCpf($cpf);
						$usuario->setTelefone($telefone);
						$usuario->setMatricula($matricula);
						

			if($usuario->insert()){
				
				header('Location: loginalunos.php'); 
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

Curso:
<select name="curso">
<option value="Sistemas de Informação">Sistemas de Informação</option>
<option value="Biologia">Biologia</option>
<option value="quimica">Química</option>
<option value="agronomia">Agronomia</option>
<option value="zoo">Zootecnia</option>
</select><br><br>

Sexo:
<select name="sexo">
<option value="masculino">Masculino</option>
<option value="feminino">Feminino</option>
</select><br><br>

 <tr>
		 
             <td>Nascimento:</td> 
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
				          for ($i=1950; $i<=2018; $i++){?>
				     <option value="<?php echo $i;?>"> <?php echo $i;}?></option>
				 </select>	</td>

			 </tr><br><br>
			 

CPF:
<input name="cpf" type="text" id="cpf" value=""/><br><br>
Telefone:
<input name="telefone" type="text" id="telefone" value=""/><br><br>
Matricula:
<input name="matricula" type="text" id="matricula" value=""/><br><br>

Email:
<input name="email" type="email" id="email" value=""/><br><br>
Senha:
<input name="senha" type="password" id="password" value=""/><br><br>

 <br>
 <input name="cadastrar" type="submit" class="btn btn-danger" value="Cadastrar">
</form>
 </center>
 </div>
  </div>
        </div>
      </section>
 </body>

</html>
