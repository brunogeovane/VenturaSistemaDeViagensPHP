<?php
require_once 'Crud.php';

class Viagens{

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