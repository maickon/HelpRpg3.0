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
	/* (non-PHPdoc)
	 * @see IRacas::dgd_raca()
	 */public function dgd_raca() {
		// TODO Auto-generated method stub
		}

	/* (non-PHPdoc)
	 * @see IRacas::dgd_deslocamento()
	 */public function dgd_deslocamento() {
		// TODO Auto-generated method stub
		}

	/* (non-PHPdoc)
	 * @see IRacas::dgd_altura()
	 */public function dgd_altura() {
		// TODO Auto-generated method stub
		}

	/* (non-PHPdoc)
	 * @see IRacas::dgd_peso()
	 */public function dgd_peso() {
		// TODO Auto-generated method stub
		}

	/* (non-PHPdoc)
	 * @see IRacas::dgd_idade()
	 */public function dgd_idade() {
		// TODO Auto-generated method stub
		}

}
?>