<?php
require_once 'Crud.php';

class Adms extends Crud {
	protected $tabela = "adm";
						
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
}
?>