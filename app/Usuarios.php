<?php
require_once 'Crud.php';

class Usuarios extends Crud{
	protected $tabela = "alunos";
	private $email;
	private $senha;
	private $nome;
	private $data;
	private $curso;
	private $sexo;
	private $cpf;
	private $fone;
	private $matricula;
	
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
	 public function setData($data) {
        $this->data = $data;
    }
    public function getData() {
        return $this->data; // eu só retornei um valor que já foi instanciado
    }
	 public function setCurso($curso) {
        $this->curso = $curso;
    }
    public function getCurso() {
        return $this->curso;
    }
	 public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    public function getSexo() {
        return $this->sexo;
    }
	 public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    public function getCpf() {
        return $this->cpf;
    }
	public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    public function getTelefone() {
        return $this->telefone;
    }
	 public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    public function getMatricula() {
        return $this->matricula;
    }
	
	
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