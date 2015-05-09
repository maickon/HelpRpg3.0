<?php
/*
 * Class Personagem
 * CLasse responsável por estabelecer a forma de um personagem
 * de Dungeons and Dragons
 * @author Mackon Rangel
 * @date 01/05/2015
 */

class Personagem implements IPersonagem{

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
	
	/*
	 * Metodo nivel()
	 * Retorna o nível do personagem
	 * @param $nivel =  é o nível do personagem
	 */
	
	public function dgd_nivel($nivel = null){
		if($nivel):
			$this->nivel = $nivel;
		else:
			$this->nivel = rand(1, 99);
		endif;
	}
	
	/*
	 * Metodo nome()
	 * Retorna um nome aleatorio para o personagem
	 */
	
	public function dgd_nome(){
		require_once 'class/nomes/nomes.php';
		$this->nome = $nomesMasculinos[rand(0, count($nomesMasculinos))];
	}
	
	/*
	 * Metodo dgd_sexo()
	 * Define o sexo do personage de forma aleatoria
	 */
	
	public function dgd_sexo(){
		$sexo_id = rand(1,2);
		if($sexo_id == 1)
			$this->sexo = 'Masculino';
		else
			$this->sexo = 'Feminino';
	}
	
	/*
	 * 	Metodo dgd_cor_de_cabelo()
	 * 	Define de forma aleatoria uma cor para o cabelo do personagem
	 */
	
	public function dgd_cor_do_cabelo(){
		$cor_cabelo = array(
				'Preto','Branco','Azul','Cinza','Verde','Vermelho','Loiro','Violeta','Castanhos','Ruivo',
				'Rosa', 'Lilás', 'Roxo', 'Azul Mar', 'Bege', 'Amarelo');
		
		$this->cor_do_cabelo = $cor_cabelo[rand(0,count($cor_cabelo)-1)];
	}
	
	/*	Metodo dgd_estilo_do_cabelo()
	 * 	Define como é o estilo do cabelo do personagem
	 * 	@param sexo = O parametro sexo indica sobre qual metodo 
	 * 	chamar para definir o estilo de cabelo correto
	 */
	
	public function dgd_estilo_do_cabelo($sexo){
		
		switch($sexo):
			case 'Masculino':
				$this->estilo_do_cabelo = $this->dgd_estilo_do_cabelo_masculino();
			break;
			
			case 'Feminino':
				$this->estilo_do_cabelo = $this->dgd_estilo_do_cabelo_feminino();
			break;
		endswitch;
	}
	
	/*	Metodo dgd_estilo_do_cabelo_masculino()
	 * 	Define de forma aleatoria um estilo de cabelo
	 * 	para o sexo masculino
	 */
	
	public function dgd_estilo_do_cabelo_masculino(){
		$estilos = array(
				'Cabelo Longo', 'Cabelo Cacheado', 'Cabelo curto', 'Cebelo muito Curto (Militar)',
				'Cabelo curto para trás', 'Cabelo Dividido no meio', 'Cabelo Bagunçado', 'Cabelo Arrepiado',
				'Cabelo com Topete', 'Cabelo Moecano', 'Cabelo com Franja', 'Cabelo Indígena', 'Cabelo Raça-fare',
				'Cabelo com Dred', 'Cabelo Ruim', 'Cabelo Black Power', 'Cabelo Muito Liso', 'Cabeça raspada');
		
		$escolhido = $estilos[rand(0, count($estilos)-1)];
		if($escolhido == 'Cabeça raspada'):
			$this->cor_do_cabelo = 'Cabelo sem cor';
		endif;
		return $escolhido;
	}
	
	/*	Metodo dgd_estilo_do_cabelo_feminino()
	 * 	Define de forma aleatoria um estilo de cabelo
	 * 	para o sexo feminino
	 */
	
	public function dgd_estilo_do_cabelo_feminino(){
		$estilos = array(
				'Cabelo longo', 'Cabelo Muito longo', 'Cabelo cacheado curto', 'Cabelo Chacheado longo',
				'Cabelo chacheado Black Power', 'Cabelo muito liso curto', 'Cabelo Trançado longo', 
				'Cabelo curto', 'Cabelo curto com franja', 'Cabelo longo com franja', 'Cabelo curto espetado',
				'Cabelo curto divididoa ao meio', 'Cabelo emo', 'Cabelo Raça-fare longo', 'Cabelo raça-fare curto',
				'Cabelo maria chiquinha', 'Cabelo bagunçado', 'Cabeça raspada');
		
		$escolhido = $estilos[rand(0, count($estilos)-1)];
		if($escolhido == 'Cabeça raspada'):
			$this->cor_do_cabelo = 'Cabelo sem cor';
		endif;
		return $escolhido;
	}
	
	/*	Metodo dgd_cor_dos_olhos()
	 * 	Define a cor dos oslhos do personagem
	 */
	
	public function dgd_cor_dos_olhos(){
		$cor_dos_olhos = array('Preto','Branco','Azul','Azul-esverdeado','Cinza','Verde','Vermelho','Castanho','violeta');
		$this->cor_dos_olhos = $cor_dos_olhos[rand(0, count($cor_dos_olhos)-1)];
	}
	
	/*	Metodo dgd_cor_da_pele()
	 * 	Define a cor da pele do personagem
	 */
	
	public function dgd_cor_da_pele(){
		$cor_da_pele = array('Muito clara','Clara','Parda','Negra','Morena','Branca');
		$this->cor_da_pele = $cor_da_pele[rand(0, count($cor_da_pele)-1)];
	}
}
?>