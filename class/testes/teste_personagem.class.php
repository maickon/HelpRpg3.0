<?php
/*
 * Class Teste_personagem
 * CLasse de teste para criação de um personagem
 * @author Mackon Rangel
 * @date 09/05/2015
*/

class Teste_personagem extends Test{
	
	function __construct(){
		$this->main();
	}
	
	/*
	 * 	Metodo main()
	 * 	Metodo principal da classe Teste_personagem
	 * 	Testa a criação de um personagem
	 */
	
	public function main(){
		
		$tag = new Tags();
		
		$tag->div('id="contrainer"');
			$personagem = new Personagem();
			$personagem->dgd_nivel();
			$personagem->dgd_nome();
			$personagem->dgd_sexo();
			$personagem->dgd_cor_do_cabelo();
			$personagem->dgd_cor_da_pele();
			$personagem->dgd_cor_dos_olhos();
			$personagem->dgd_estilo_do_cabelo($personagem->sexo);
			$personagem->dgd_estilo_do_nariz();
			$personagem->dgd_estilo_da_boca();
			$personagem->dgd_estilo_da_sobrancelha();
			$personagem->dgd_estilo_do_rosto();
			$personagem->dgd_estilo_de_olho();
			$personagem->dgd_estilo_de_queixo();
			$personagem->dgd_estilo_de_testa();
			
			$caracteristicas = array(
									'Nivel'=> $personagem->nivel,
									'Nome'=> $personagem->nome,
									'Sexo'=> $personagem->sexo,
									'Cor do Cabelo'=> $personagem->cor_do_cabelo,
									'Estilo do Cabelo'=> $personagem->estilo_do_cabelo,
									'Cor da Pele'=> $personagem->cor_da_pele,
									'Cor dos Olhos'=> $personagem->cor_dos_olhos,
									'Estilo do Nariz'=>$personagem->tipo_de_nariz,
									'Estilo da Boca'=>$personagem->tipo_da_boca,
									'Estilo das Sobrancelhas'=>$personagem->tipo_da_sobrancelha,
									'Estilo de Rosto'=>$personagem->estilo_do_rosto,
									'Estilo dos Olhos'=>$personagem->estilo_do_olho,
									'Estilo do queixo'=>$personagem->estilo_do_queixo,
									'Estilo da Testa'=>$personagem->estilo_da_testa
									);
			
			$this->show($caracteristicas);
			
			new Teste_barbaro($personagem->nivel);			
		
			
			new Teste_racas($caracteristicas['Sexo']);
			
			$attr = new Atributos();
			$attr->forca = $attr->dgd_habilidades($personagem->nivel);
			$attr->destr = $attr->dgd_habilidades($personagem->nivel);
			$attr->const = $attr->dgd_habilidades($personagem->nivel);
			$attr->sabed = $attr->dgd_habilidades($personagem->nivel);
			$attr->caris = $attr->dgd_habilidades($personagem->nivel);
			$attr->intel = $attr->dgd_habilidades($personagem->nivel);
			
		echo '<br/>';
		
		$this->show_habilidades(array(
					'forca'=>$attr->forca.' '.$attr->dgd_modificador($attr->forca),
					'destreza'=>$attr->destr.' '.$attr->dgd_modificador($attr->destr),
					'Constituicao'=>$attr->const.' '.$attr->dgd_modificador($attr->const),
					'Inteligência'=>$attr->intel.' '.$attr->dgd_modificador($attr->intel),
					'Sabedoria'=>$attr->sabed.' '.$attr->dgd_modificador($attr->sabed),
					'Carisma'=>$attr->caris.' '.$attr->dgd_modificador($attr->caris)
						)
					);
	}
	/*
	function show_list($functon, $attr, $loop = 20){
		$values = array();
		while($loop >= 0):
			$personagem = new Personagem();
			$personagem->$functon();
			if($loop == 0):
				$values[] = "{$personagem->$attr}";
			else:
				$values[] = "{$personagem->$attr}_";
			endif;
			$loop--;
		endwhile;
		
		foreach($values as $value):
			$opcoes .= $value;
		endforeach;
		return $opcoes;
	}
	*/
}
?>