<?php

class Adms
{
    					
	private $email;
	private $senha;
	private $nome;
	private $matricula;
	private $telefone;
	private $nivel;
	
	 public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email; // eu só retornei um valor que já foi instanciado
    }
    public function setSenha($senha) {
        $this->senha = $senha;
    }
    public function getSenha() {
        return $this->senha;
    }
	public function setNome($nome){
		$this->nome = $nome; 
	}
	public function getNome() {
        return $this->nome;
    }
		 public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    public function getMatricula() {
        return $this->matricula;
    }
	public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    public function getTelefone() {
        return $this->telefone;
    }
	public function setNivel($nivel) {
        $this->nivel = $nivel;
    }
    public function getNivel() {
        return $this->nivel;
    }

	
}
?>