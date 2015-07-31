<?php
/*
 *Classe Barbaro
* Define os aspectos da classe babrbaro 
* conforme o livro de D&D. 
* @author Mackon Rangel
* @date 26/07/2015
*/
class Barbaro extends Classes{
	
	function __construct(){
		$this->teste_de_resistencia = new Testes_de_resistencia();
	}
	
	
	/*
	 * dgd__pts_pericias()
	* Armazena no atributo dv o valor
	* que representa as dados de vida
	* da classe barbaro.
	*/
	
	function dgd_pts_pericias(){
		$this->dv = 4;
	}
	
	/*
	 * dgd_dv()
	 * Armazena no atributo dv o valor
	 * que representa as dados de vida 
	 * da classe barbaro.
	 */
	
	function dgd_dv(){
		$this->dv = 12;
	}
	
	/*
	 * dgd_talento()
	* Armazena no atributo talento a
	* lista completa de todos os talentos 
	* da classe barbaro.
	*/
	function dgd_talentos(){
		$this->talentos = array(	
							  "Movimento Rápido, analfabetismo, fúria 1/dia",
							  "Esquiva sobrenatural",
							  "Sentir armadilhas +1",
				 			  "Fúria 2/dia",
							  "Esquiva sobrenatural aprimorada",
							  "Sentir armadilhas +2",
				 			  "Redução de dano 1/-",
							  "Fúria 3/dia",
							  "Sentir armadilhas +3",
							  "Redução de dano 2/-",
							  "Fúria maior",
							  "Fúria 4/dia, sentir armadilhas +4",
				 			  "Redução de dano 3/-",
							  "Vontade inabalável",
							  "Sentir armadilhas +5",
							  "Redução de dano 4/-, fúria 5/dia",
				 			  "Fúria incansável",
							  "Sentir armadilhas +6",
							  "Redução de dano 5/-",
							  "Fúria poderosa, fúria 6/dia"
						);
	}
	
	/*
	 *dgd_kit()
	* Armazena no atributo kit a lista 
	* de todos os objetos iniciais que 
	* um barbaro cerra consigo.
	*/
	function dgd_kit(){
	
	}
	
	function dgd_pericias(){
		$this->pericias_brb = 
				array(
						"Saltar (For)", 
						"Escalar (For)", 
						"Intimidação (Car)",
						"Sobrevivência (Sab)",
						"Natação (For)", 
						"Ofícios (Int)", 
						"Ouvir (Sab)", 
						"Cavalgar (Des)",
						"Adestrar Animais (Car)"
					);
		
		$this->pericias_nbrb = 
				array(
						"Observar (Sab)",
						"Profissão (Sab)",
						"Esconder-se (Des)",
						"Furtividade (Des)",
						"Abrir Fechaduras (Des)", 
						"Acrobacia (Des)", 
						"Arte da Fuga (Des)", 
						"Atuação (Car)",
						"Avaliação (Int)" ,
						"Blefar (Car)", 
						"Conhecimento (local) (Int)", 
						"Decifrar Escrita (Int)", 
						"Diplomacia (Car)",
						"Disfarces (Car)", 
						"Equilíbrio (Des)",
						"Esconder-se (Des)", 
						"Falsificação (Int)", 
						"Furtividade (Des)",
						"Intimidação (Car)", 
						"Observar (Sab)", 
						"Obter Informação (Car)", 
						"Operar Mecanismo (Int)", 
						"Prestidigitação (Des)",
						"Procurar (Int)",  
						"Sentir Motivação (Sab)", 
						"Usar Cordas (Des)", 
						"Usar Instrumento Mágico (Car)"
					);
		
	}
	
	function dgd_armas(){
	
	}
	
	function dgd_armaduras(){
	
	}
	
	function dgd_testes_de_resistencia($nivel){
		$this->fortitude	= $this->teste_de_resistencia->dg_teste_bom($nivel);
		$this->reflexos 	= $this->teste_de_resistencia->dg_teste_ruim($nivel);
		$this->vontade 		= $this->teste_de_resistencia->dg_teste_ruim($nivel);
	}
}