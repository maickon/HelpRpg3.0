<?php
/*
 * Class Racas
 * CLasse responsável por definira a raça do personagem 
 * e as características que esta raça possui
 * @author Mackon Rangel
 * @date 09/05/2015
 */

class Racas implements IRacas{

	public $atributos;

	function __construct(){

	}

	function __set($propriedade, $valor){
		if($propriedade):
			$this->atributos[$propriedade] = $valor;
		else:
			echo 'Parametro não Informado.';
		endif;
	}

	function __get($propriedade){
		if($propriedade):
			return $this->atributos[$propriedade];
		else:
			echo 'Parametro não Informado.';
		endif;
	}
}
?>