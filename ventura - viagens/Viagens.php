<?php
require_once 'Crud.php';

class Viagens extends Crud {
	protected $tabela = "viagem";
						
	private $local;
	private $data;
	private $descricao;
	private $localsaida;
	private $horasaida;
	private $horachegada;
	
	 public function setLocal($local) {
        $this->local = $local;
    }
    public function getLocal() {
        return $this->local; // eu só retornei um valor que já foi instanciado
    }
    public function setData($data) {
        $this->data = $data;
    }
    public function getData() {
        return $this->data;
    }
	public function setDescricao($descricao){
		$this->descricao = $descricao; 
	}
	public function getDescricao() {
        return $this->descricao;
    }
		 public function setLocalsaida($localsaida) {
        $this->localsaida = $localsaida;
    }
    public function getLocalasaida() {
        return $this->localsaida;
    }
	public function setHorasaida($horasaida) {
        $this->horasaida = $horasaida;
    }
    public function getHorasaida() {
        return $this->horasaida;
    }
	public function setHorachegada($horachegada) {
        $this->horachegada = $horachegada;
    }
    public function getHorachegada() {
        return $this->horachegada;
    }

	
	
	public function insert() {
	    $sql = "INSERT INTO {$this->tabela} (local, data, descricao, localsaida, horasaida, horachegada) VALUES (:local, :data, :descricao, :localsaida, :horasaida, :horachegada)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':local', $this->local);
        $stm->bindParam(':data', $this->data);
		$stm->bindParam(':descricao', $this->descricao);
	    $stm->bindParam(':localsaida', $this->localsaida);
		$stm->bindParam(':horasaida', $this->horasaida);
		$stm->bindParam(':horachegada', $this->horachegada);
        return $stm->execute();
	}
}
?>