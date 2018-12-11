<?php
require_once 'Crud.php';

class Adms{
    
    
	public function insert() {
	    $sql = "INSERT INTO {$this->tabela} (email, senha, nome, matricula, telefone, nivel) VALUES (:email, :senha, :nome, :matricula, :telefone, :nivel)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':email', $this->email);
        $stm->bindParam(':senha', $this->senha);
		$stm->bindParam(':nome', $this->nome);
	    $stm->bindParam(':matricula', $this->matricula);
		$stm->bindParam(':telefone', $this->telefone);
		$stm->bindParam(':nivel', $this->nivel);
        return $stm->execute();
    }
    
    static public function findAdm()
	{
		$sql = "select * from adm where idAdm = '".$_SESSION['identificadoradm']."'";
		$stmt = DB::prepare($sql);
		$stmt->bindParam('::idAdm', $idAdm, PDO::PARAM_INT);
		$stmt->execute();
		$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
		return $resultado;
    }
    
    public function updateAdm($nome,$email,$telefone,$matricula){
        $atualizarusuario=DB::prepare("UPDATE adm SET nome=:nome, email=:email, telefone=:telefone, matricula=:matricula where idAdm=".$_SESSION['identificadoradm']);
        $atualizarusuario->bindValue(":email",$email);
        $atualizarusuario->bindValue(":nome",$nome);
        $atualizarusuario->bindValue(":telefone",$telefone);	
        $atualizarusuario->bindValue(":matricula",$matricula);
        $atualizarusuario->execute();
        header("Location: perfiladm.php");
        }
        
}
?>