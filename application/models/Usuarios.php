<?php
class Usuarios{
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

?>