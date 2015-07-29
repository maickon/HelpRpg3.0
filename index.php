<link rel="stylesheet" media="screen" href="css/index.css" />
<<<<<<< HEAD
<script src="js/index.js"></script>

=======
 <script src="js/index.js"></script>
>>>>>>> 0e06cdfff5f4cef1916042b7a46fd28602b60cf5
<?php
if(file_exists('init.php')):
	require 'init.php';
else:
	echo 'Arquivo init.php não encontrado.';
endif;

$teste_personagem = new Teste_personagem();
?>