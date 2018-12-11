<?php
require_once 'DB.php';

class Crud extends CI_Controller{	
 
    static public function find()
	{
		$sql = "select * from alunos where idAlunos = '".$_SESSION['identificador']."'";
		$stmt = DB::prepare($sql);
		$stmt->bindParam('::idAlunos', $idAlunos, PDO::PARAM_INT);
		$stmt->execute();
		$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
		return $resultado;
	}

	public function update($nome,$email,$data,$cpf,$curso,$matricula,$telefone,$sexo){
    $atualizarusuario=DB::prepare("UPDATE alunos SET nome=:nome, email=:email, data=:data, cpf=:cpf, curso=:curso, matricula=:matricula, telefone=:telefone, sexo=:sexo  where idAlunos=".$_SESSION['identificador']);
	$atualizarusuario->bindValue(":email",$email);
	$atualizarusuario->bindValue(":nome",$nome);
    $atualizarusuario->bindValue(":data",$data);
	$atualizarusuario->bindValue(":cpf",$cpf);
	$atualizarusuario->bindValue(":curso",$curso);
	$atualizarusuario->bindValue(":matricula",$matricula);
    $atualizarusuario->bindValue(":telefone",$telefone);
	$atualizarusuario->bindValue(":sexo",$sexo);	
	$atualizarusuario->execute();
	header("Location: perfil.php");
}
    
    static public function findAllViagens(){
	$sql = "select * from viagem";
	$stmt = DB::prepare($sql);
	$stmt->execute();
	return $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC );	
	}
	
	static public function insertTabela($iddaviagem, $iddoaluno){ 
	
	$sql = "insert into tabela (viagemtabela, alunotabela) VALUES (:iddaviagem, :iddoaluno);";
	$stmt = DB::prepare($sql);
    $stmt->bindParam(':iddaviagem',$iddaviagem);
    $stmt->bindParam(':iddoaluno', $iddoaluno);
	return $stmt->execute();	
	}
	static public function viagensInscritas(){
		
	$sql = "select * from viagem INNER JOIN tabela ON tabela.viagemtabela = viagem.idViagem and tabela.alunotabela = '".$_SESSION['identificador']."'";
	$stmt = DB::prepare($sql);
	$stmt->execute();
	return $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC );		
	}
	static public function deleteInscricao($iddaviagem) {
		
	$sql = "delete from tabela where viagemtabela = :iddaviagem and alunotabela = '".$_SESSION['identificador']."'";
    $stmt = DB::prepare($sql);
    $stmt->bindParam(':iddaviagem',$iddaviagem);
    $stmt->execute();	
	}
	static public function Inscritos($id){ 
 	 
	$sql = "select * from alunos INNER JOIN tabela ON alunos.Idalunos = tabela.alunotabela and tabela.viagemtabela = $id";
	$stmt = DB::prepare($sql);
    $stmt->bindParam(1,$id);
	$stmt->execute();
	return $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC );	
	}
	static public function DeleteViagem($iddaviagem) {
		
	$sql = "delete from viagem where idViagem = :iddaviagem; delete from tabela where viagemtabela = :iddaviagem;";
    $stmt = DB::prepare($sql);
    $stmt->bindParam(':iddaviagem',$iddaviagem);
    $stmt->execute();	
	}
		
}
?>