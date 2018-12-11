<?php

class Viagens{
						
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
?>