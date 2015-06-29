<?php
/*
 * Interface IPersonagem
 * Estabelece métodos comuns a todas as classes
 * que produzem algum tipo de personagem.
 * @author Mackon Rangel
 * @date 01/05/2015
 */

interface IPersonagem{
	function dgd_nivel($nivel = null);
	function dgd_nome();
}
?>