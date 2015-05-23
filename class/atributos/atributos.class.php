<?php
/*
 * Classe Atributos
 * Esta classe prover métodos para geração de 
 * valores de habilidade base de uma ficha de RPG
 * Dungeons and Dragons.
 * @author Mackon Rangel
 */

class Atributos{
	
	public $propriedades;
	
	function __construct(){
			
	}
	
	function __set($propriedade, $valor){
		if($propriedade):
			$this->propriedades[$propriedade] = $valor;
		else:
			echo 'Parametro não Informado.';
		endif;
	}
	
	function __get($propriedade){
		if($propriedade):
			return $this->propriedades[$propriedade];
		else:
			echo 'Parametro não Informado.';
		endif;
	}
	
	/*
	 * Metodo dgd_habilidades()
	 * Prover a simulação de uma rolagem de 4 dados de 6 faces
	 * descartando o menor número.
	 * @param nivel = Nível do personagem
	 */
	function dgd_habilidades(){
		do{
			$rol_1 = rand(1, 6);
			$rol_2 = rand(1, 6);
			$rol_3 = rand(1, 6);
			$rol_4 = rand(1, 6);
			
			$menor = $rol_1;
			if($menor > $rol_2):
				$menor = $rol_2;
			elseif($menor > $rol_3):
				$menor = $rol_3;
			elseif($menor > $rol_4):
				$menor = $rol_4;
			endif;
			
			$rolagem = $rol_1 + $rol_2 + $rol_3 + $rol_4;
			$rolagem -= $menor;
		}while($rolagem <= 8);
		
		return $rolagem+$bonus;
		
	}
	
	/*
	 * Metodo dgd_modificador()
	 * Cria o modificado de cada habilidade base 
	 * de um personagem de Dungeons and Dragons
	 * @param attr = Valor do atributo
	 */
	function dgd_modificador($attr){
		
		$modificador = ($attr-10)/2;
		$modificador_final = 0;
		
		switch($modificador):
			case -0.5: $modificador_final = -1;
			break;
			
			case -1.5: $modificador_final = -2;
			break;
			
			case -2.5: $modificador_final = -3;
			break;
			
			case -3.5: $modificador_final = -4;
			break;
			
			case -4.5: $modificador_final = -5;
			break;
			
			default: $modificador_final = $modificador;
			break;
		endswitch;
		
		if(intval($modificador_final) > 0):
			return '+' . strval(intval($modificador_final));
		elseif(intval($modificador_final) == 0):
			return '+' . strval(intval($modificador_final));
		else:
			return strval(intval($modificador_final));
		endif;
	}
	
	/*	Metodo dgd_bonus_adicional()
	 * 	Calcula o bonus de habilidade adicional a 
	 * 	cada 4 niveis de personagem conferme as regras de D&D
	 * 	@param nivel = O nivel do personagem
	 */
	
	function dgd_bonus_adicional($nivel){
		return intval($nivel/4);
	}
	
	/* Metodo dgd_pericias()
	 * Calcula os pontos de pericia de um personagem
	 * conforme o seu nivel
	 */
	
}
?>