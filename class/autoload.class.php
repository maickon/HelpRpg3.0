<?php
/*
 * Classs Autoload
 * Carrega todas as classes em tempo de execuчуo no sistema
 * @author Mackon Rangel
 */

final class Autoload{
	
	function __construct(){
		function __autoload($classname){
			if(file_exists("class/{$classname}.class.php")):
				require "class/{$classname}.class.php";
			elseif(file_exists("class/personagem/{$classname}.class.php")):
				require "class/personagem/{$classname}.class.php";
			elseif(file_exists("interface/{$classname}.php")):
				require "interface/{$classname}.php";
			elseif(file_exists("class/atributos/{$classname}.class.php")):
				require "class/atributos/{$classname}.class.php";
			elseif(file_exists("class/racas/{$classname}.class.php")):
				require "class/racas/{$classname}.class.php";
			elseif(file_exists("class/testes/{$classname}.class.php")):
				require "class/testes/{$classname}.class.php";
			endif;
			
		}
	}
}
?>