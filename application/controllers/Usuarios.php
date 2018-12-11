<?php
require_once 'Crud.php';

class Usuarios extends CI_Controller{
	
	public function insert() {
	    $sql = "INSERT INTO {$this->tabela} (email, senha, nome, data, curso, sexo, cpf, telefone, matricula) VALUES (:email, :senha, :nome, :data, :curso, :sexo, :cpf, :telefone, :matricula)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':email', $this->email);
        $stm->bindParam(':senha', $this->senha);
		$stm->bindParam(':nome', $this->nome);
		$stm->bindParam(':data', $this->data);
		$stm->bindParam(':curso', $this->curso);
		$stm->bindParam(':sexo', $this->sexo);
		$stm->bindParam(':cpf', $this->cpf);
		$stm->bindParam(':telefone', $this->telefone);
	    $stm->bindParam(':matricula', $this->matricula);
        return $stm->execute();
	}
}
?>