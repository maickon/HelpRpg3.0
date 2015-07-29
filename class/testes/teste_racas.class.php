<?php
/*
 * Classe de teste para Raças
 * Instancia uma raça de forma aleatória
 * e através do nome da raça, é definida o
 * peso, idade, altura e deslocamento do personagem.
 * Dungeons and Dragons.
 * @author Mackon Rangel
 * @date 23/06/2015
 */
class Teste_racas extends Test{
	
	function __construct($sexo){
		$this->main($sexo);
	}
	
	function main($sexo){
		$raca = new Racas();
		$raca->dgd_raca($sexo);	
		$raca->dgd_idade($raca->raca);
		$raca->dgd_altura($raca->raca);
		$raca->dgd_deslocamento($raca->raca);
		$raca->dgd_peso($raca->raca);
		
		$caracteristicas = array(
								'raca'=> $raca->raca,
								'idade'=> $raca->idade,
								'altura'=> $raca->altura,
								'deslocamento'=> $raca->deslocamento,
								'peso'=> $raca->peso
								);
		$this->show($caracteristicas);
	}
}