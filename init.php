<?php
/*
 * File init.php
 * Carrega todos os modulos pertinente ao sistema
 * @author Mackon Rangel
 */


if(file_exists('class/autoload.class.php')):
	require 'class/autoload.class.php';
	new Autoload();
else:
	echo 'Erro ao carregar o arquivo de classe autoload.';
endif;
?>