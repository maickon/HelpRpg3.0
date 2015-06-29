<?php
/*
 * Class Teste_personagem
 * CLasse de teste para criação de um personagem
 * @author Mackon Rangel
 * @date 09/05/2015
*/

class Teste_personagem{
	
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
									'Nivel'=> $this->montar_opcoes("dgd_nivel","nivel"),
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
	
	function show(array $show){
		$id = 0;
		echo '<div class="container">';
		foreach($show as $name => $content):
			$id++;
			echo '<div class="description">
				  	<strong class="label">'.$name . '</strong>
				  		<span class="resposte">
				  		<input type="text" name="nomes" id="value'.$id.'" value="">
						<input type="hidden" name="nomes" id="values_list'.$id.'" value="'.$content. '">
				  		</span>
				  </div>';
		endforeach;
		echo '</div>';
		echo '<input type="button" onClick="loop_geral(50,2000);" value="Novo Personagem">';
	}
	
	function show_habilidades(array $show){
		echo '<div class="container_habilidades">';
		foreach($show as $name => $content):
			echo '<div class="description"><strong class="label">'.$name . '</strong> <span class="resposte">'.$content. '</span> </div>';
		endforeach;
		echo '</div>';
	}
	
	function montar_opcoes($funcao, $atributo){
		$i = 0;
		$personagem = new Personagem();
		while($i < 20):
			if($i != 20):
				$personagem->$funcao();
				$valores .= "{$personagem->$atributo}_";
			else:
				$personagem->$funcao();
				$valores .= "{$personagem->$atributo}";
			endif;
			$i++;
		endwhile;
		return($valores);
	}
}
?>