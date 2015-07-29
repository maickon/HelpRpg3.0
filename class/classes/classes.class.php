<?php
/*
 * Class Classes
 * CLasse responsável por definira a classe do personagem 
 * e as características que esta classe possui
 * @author Mackon Rangel
 * @date 12/07/2015
 */

abstract class Classes implements IClasses{
	
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