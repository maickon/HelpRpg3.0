<?php
/*
 * Interface IClasses
* Estabelece métodos comuns a todas as classes
* que definem uma classe básica de RPG.
* @author Mackon Rangel
* @date 12/07/2015
*/

interface IClasses{
	function dgd_dv();
	function dgd_talentos();
	//function dgd_kit();
	function dgd_pericias();
	//function dgd_armas();
	//function dgd_armaduras();
	function dgd_testes_de_resistencia($nivel);
}
?>