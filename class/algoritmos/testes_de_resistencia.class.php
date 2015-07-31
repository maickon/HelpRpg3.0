<?php
/*
 *Classe Testes_de_resistencia
* Gera o algoritmo que produz 
* os valores de resistencia de um 
* personagem.
* @author Mackon Rangel
* @date 26/07/2015
*/
class Testes_de_resistencia{
	
	/*
	 * dg_teste_bom()
	 * Produz o resultado de um 
	 * teste de resistencia bom de uma
	 * classe.
	 * @param $nivel = nivel do personagem
	 */
	function dg_teste_bom($nivel){
		$resistencia_bom = 0;
	
		if($nivel == 1){
			$resistencia_bom = 2;
		}else{
			$resistencia_bom = intval(($nivel/2) + 2);
		}
	
		return $resistencia_bom;
	}

	/*
	* dg_teste_ruim()
	* Produz o resultado de um
	* teste de resistencia ruim de uma
	* classe.
	* @param $nivel = nivel do personagem
	*/
	function dg_teste_ruim($nivel){
		$resistencia_ruin = 0;
		if($nivel < 2):
			$resistencia_ruin = 0;
		else:
			if($nivel <= 0):
			else:
				for($i=0; $i<$nivel; $i++):
					if($i == 2):
						$resistencia_ruin += 1;
						$i = 0;
						$nivel -= 3;
					endif;
				endfor;
			endif;
		endif;
		return $resistencia_ruin;
	}
}