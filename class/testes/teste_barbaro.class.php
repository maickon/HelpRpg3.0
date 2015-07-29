<?php
/*
 *Classe Teste_arbaro
* Testa a criação de um objeto
* barbaro.
* @author Mackon Rangel
* @date 26/07/2015
*/
class Teste_barbaro extends Test{
	
	function __construct($nivel){
		$this->main($nivel);
	}
	
	public function main($nivel){
		$brb = new  Barbaro();
		$brb->dgd_testes_de_resistencia($nivel);
		$testes = array(
				'Fortitude' => $brb->fortitude,
				'Reflexos' 	=> $brb->reflexos,
				'Vontade' 	=> $brb->vontade,
		);
		$this->show($testes);
		
		//print_r($br->atributos);
	}
}