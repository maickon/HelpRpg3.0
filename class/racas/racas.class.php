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
	
	/*
	 * dgd_racas()
	 * Este metodo vai inicializar o atributo racas
	 * com o nome de uma raca de forma aleatoria
	 * @param $sexo = o nome de um sexo para definir
	 * o nome da raça conforme o sexo do personagem. 
	 */
	function dgd_raca($sexo){
		if($sexo == 'Masculino'):
			$racas = array("Humano","Anão","Elfo","Gnomo","Meio elfo","Meio orc","Halfling");
		elseif($sexo == 'Feminino'):
			$racas = array("Humana","Anã","Elfa","Gnoma","Meio elfa","Meio orc","Halfling");
		endif;
		$escolido = rand(0, count($racas)-1);
		$this->raca = $racas[$escolido];
	}
	
	/*
	 * dgd_deslocamento()
	 * Inicializa um atributo de deslocamento que 
	 * varia com a raça do personagem.
	 * @param raca = a raça do personagem
	 */
	function dgd_deslocamento($raca){
		switch($raca):
			case "Halfling": $this->deslocamento = "6 m ";
			break;
				
			case "Gnomo": $this->deslocamento = "6 m ";
			break;
				
			case "Gnoma": $this->deslocamento = "6 m ";
			break;
				
			case "Anã": $this->deslocamento = "6 m ";
			break;
				
			default : $this->deslocamento = "9 m ";
		endswitch;
	}
	
	/*
	 * dgd_altura()
	 * Determina a altura de um personagem baseado 
	 * em sua raça.
	 * @param $raca = raça do personagem.
	 */
	
	function dgd_altura($raca){
		$humano = array
		(
				"1,60 m","1,61 m","1,62 m","1,63 m","1,64 m","1,65 m","1,66 m","1,67m","1,68 m","1,69 m",
				"1,70 m","1,71 m","1,72 m","1,73 m","1,74 m","1,75 m","1,76 m","1,77m","1,78 m","1,79 m",
				"1,80 m","1,81 m","1,82 m","1,83 m","1,84 m","1,85 m","1,86 m","1,87m","1,88 m","1,89 m",
				"1,90 m"
		);
		$halfling = array
		(
				"60 cm","61 cm","62 cm","63 cm","64 cm","65 cm","66 cm","67 cm","68 cm","69 cm",
				"70 cm","71 cm","72 cm","73 cm","74 cm","75 cm","76 cm","77 cm","78 cm","79 cm",
				"80 cm","81 cm","82 cm","83 cm","84 cm","85 cm","86 cm","87 cm","88 cm","89 cm",
				"90 cm","91 cm","92 cm","93 cm","94 cm","95 cm","96 cm","97 cm","98 cm","99 cm",
				"1,00 m"
		);
		$gnomo = array
		(
				"1,00 m","1,01 m","1,02 m","1,03 m","1,04 m","1,05 m","1,06 m","1,07m","1,08 m","1,09 m",
				"1,10 m","1,11 m","1,12 m","1,13 m","1,14 m","1,15 m","1,16 m","1,17m","1,18 m","1,19 m",
				"1,20 m"
		);
		$meioOrc = array
		(
				"1,80 m","1,81 m","1,82 m","1,83 m","1,84 m","1,85 m","1,86 m","1,87m","1,88 m","1,89 m",
				"1,90 m","1,91 m","1,92 m","1,93 m","1,94 m","1,95 m","1,96 m","1,97m","1,98 m","1,99 m",
				"2,00 m","2,01 m","2,02 m","2,03 m","2,04 m","2,05 m","2,06 m","2,07m","2,08 m","2,09 m",
				"2,10 m"
		);
		$anao = array
		(
				"1,30 m","1,31 m","1,32 m","1,33 m","1,34 m","1,35 m","1,36 m","1,37m","1,38 m","1,39 m",
				"1,40 m","1,41 m","1,42 m","1,43 m","1,44 m","1,45 m","1,46 m","1,47m","1,48 m","1,49 m",
				"1,50 m"
		);
		$meioElfo = array
		(
				"1,50 m","1,51 m","1,52 m","1,53 m","1,54 m","1,55 m","1,56 m","1,57m","1,58 m","1,59 m",
				"1,60 m","1,61 m","1,62 m","1,63 m","1,64 m","1,65 m","1,66 m","1,67m","1,68 m","1,69 m",
				"1,70 m","1,71 m","1,72 m","1,73 m","1,74 m","1,75 m","1,76 m","1,77m","1,78 m","1,79 m",
				"1,80 m"
		);
		
		$elfo = array
		(
				"1,40 m","1,41 m","1,42 m","1,43 m","1,44 m","1,45 m","1,46 m","1,47m","1,48 m","1,49 m",
				"1,50 m","1,51 m","1,52 m","1,53 m","1,54 m","1,55 m","1,56 m","1,57m","1,58 m","1,59 m",
				"1,60 m","1,61 m","1,62 m","1,63 m","1,64 m","1,65 m","1,66 m","1,67m","1,68 m","1,69 m",
				"1,70 m"
		);
		
		$racas = array("Humano","Anão","Elfo","Gnomo","Meio elfo","Meio orc","Halfling","Humana","Anã","Elfa","Gnoma","Meio elfa");
		$alturas = array($humano,$anao,$elfo,$gnomo,$meioElfo,$meioOrc,$halfling,$humano,$anao,$elfo,$gnomo,$meioElfo);
		
		for($i=0; $i<count($racas); $i++):
			if($raca == $racas[$i]):
				$altura_escolida = $alturas[$i];
				$escolido = rand(0, count($altura_escolida)-1);
				$this->altura = $altura_escolida[$escolido];
			endif;
		endfor;
	}
	
	/*
	 * dgd_peso()
	 * Inicializa o atributo peso conforme a
	 * raça do personagem passada por parametro
	 * @raca = raça do personagem
	 */
	function dgd_peso($raca){		
		$humano = array ("60kg","61kg","62kg","63kg","64kg","65kg","66kg","67kg","68kg","69kg",
				"70kg","71kg","72kg","73kg","74kg","75kg","76kg","77kg","78kg","79kg","80kg");
		
		$halfling = array ("15kg","16kg","17kg","18kg");
		
		$gnomo = array ("18kg","19kg","20kg","21kg","22kg","23kg","24kg","25kg");
		
		$meioOrc = array ("90kg","91kg","92kg","93kg","94kg","95kg","96kg","97kg","98kg","99kg",
				"100kg","101kg","102kg","103kg","104kg","105kg","106kg","107kg","108kg","109kg",
				"110kg","111kg","112kg","113kg","114kg","115kg","116kg","117kg","118kg","119kg",
				"120kg","121kg","122kg","123kg","124kg","125kg");
		
		$anao = array ("50kg","51kg","52kg","53kg","54kg","55kg","56kg","57kg","58kg","59kg","60kg",
				"61kg","62kg","63kg","64kg","65kg","66kg","67kg","68kg","69kg","70kg","71kg",
				"72kg","73kg","74kg","75kg","76kg","77kg","78kg","79kg","80kg","81kg","82kg",
				"83kg","84kg","85kg","86kg","87kg","88kg","89kg","90kg");
		
		$meioElfo = array ("45kg","46kg","47kg","48kg","49kg","50kg","51kg","52kg","53kg","54kg",
				"55kg","56kg","57kg","58kg","59kg","60kg","61kg","62kg","63kg","64kg",
				"65kg","66kg","67kg","68kg","69kg","70kg","71kg","72kg","73kg","74kg",
				"75kg","76kg","77kg","78kg","79kg","80kg","81kg","82kg","83kg","84kg",
				"85kg","86kg","87kg","88kg","89kg","90kg");
		
		$elfo = array ("40kg","41kg","42kg","43kg","44kg","45kg","46kg","47kg","48kg","49kg",
				"40kg","41kg","42kg","43kg","44kg","45kg","46kg","47kg","48kg","49kg",
				"50kg","51kg","52kg","53kg","54kg","55kg","56kg","57kg","58kg","59kg",
				"60kg","61kg","62kg","63kg","64kg","65kg");
		
		$racas = array("Humano","Anão","Elfo","Gnomo","Meio elfo","Meio orc","Halfling","Humana","Anã","Elfa","Gnoma","Meio elfa");
		$peso = array($humano,$anao,$elfo,$gnomo,$meioElfo,$meioOrc,$halfling,$humano,$anao,$elfo,$gnomo,$meioElfo);
		
		for($i=0; $i<count($racas); $i++):
			if($raca == $racas[$i]):
				$peso_escolida = $peso[$i];
				$escolido = rand(0, count($peso_escolida)-1);
				$this->peso = $peso_escolida[$escolido];
			endif;
		endfor;
	}
	
	/*
	 * dgd_idade()
	 * Inicializa o atributo idade conforme 
	 * a raça do personagem que é passada por parametro.
	 * @param $raca = raça do personagem
	 */
	
	function dgd_idade($raca){
		$racas = array("Humano","Anão","Elfo","Gnomo","Meio elfo","Meio orc","Halfling","Humana","Anã","Elfa","Gnoma","Meio elfa");
		$idade = array(rand(15,100),rand(35,600),rand(85,1200),rand(30,400),rand(15,500),rand(10,85),rand(15,200),rand(15,100),rand(35,600),rand(85,1200),rand(30,400),rand(15,500));
		
		for($i=0; $i<count($racas); $i++):
			if($raca == $racas[$i]):
				$idade_escolida = $idade[$i];
				$this->idade = $idade_escolida;
			endif;
		endfor;
	}
	
}
?>