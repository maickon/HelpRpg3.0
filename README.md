<h1>Gerador de personagens de D&D</h1>

<p>
Este código permite criar uma ficha de RPG do sistema D20 de forma aleatória.
Baseado no nível do personagem, seus poderes são definidos. Isso ajuda aos jogadores a 
agilizarem no processo de criação de fichas.
</p>

<h2>Instalação no windows</h2>
<p>
Faça o download do <a href="https://www.apachefriends.org/xampp-files/5.5.24/xampp-win32-5.5.24-0-VC11-installer.exe"> XAMP </a>. Feito o download, faça a instalação na sua máquina. 
</p>

<p>Uma vez instalado, você precisa acessar uma pasta chamada <em>xamp</em> que normalmente fica em <em> C:\xamp </em>. Lá você vai entrar na pasta <em> htdocs </em>. Nesta pasta é onde vai ficar qualquer projeto que você venha a desenvolver com PHP.</p>

<p>
Faça o download deste projeto no botão <em> Download ZIP</em> do lado direito desta página. Descompacte o arquivo e coloque o dentro da pasta 
<em> htdocs </em>.
</p>

<p>
Para acessar o projeto em funcionamento basta você acessar no seu navegador o endereço <a href="http://127.0.0.1/"> http://127.0.0.1/ + o nome do projeto (pasta descompactada)</a>. Dessa forma você poderá ver o sistema rodando.
</p>


<h2>Documentação</h2>
<p>
Sempre na medida do possível eu tentarei manter atualizado a documentação do código que estou escrevendo.
</p>

<ul>
	<li><a href="#Introducao">Introducão</a></li>
	<li><a href="#Classe Aitoload">Classe Autoload</a></li>
</ul>


<h2>Introdução</h2>
<p>
A página principal verifica se existe o arquivo de inicializacao chamado init.php. Se existir carrega por require e logo em seguida instancia um objeto de teste para se criar um peronagem, do contrário exibe uma mensagem de erro.
<h6>Arquivo Init.php</h6>
Este arquivo verifica se existe a classe Autoload.class.php no diretório /class, se existir será instanciado um objeto autoload new Autoload(), do contrário será exibido uma mensagem de erro.
</p>


<h2>Introdução</h2>
<p>
Esta classe possui em seu método contrutor uma chamada ao mátodo mágico _autoload($classname). Este método intercepta qualquer instanciação feita caso a classe não exista (nao tenha um caminho válido por require ainda). Dessa forma o método _autoload($classname) vai aceitar por parametro o nome da classe que vem automaticamente. Com este nome o metodo vai fazer o seu devido tratamento. Ele vai verificar se existe um arquivo de classe dentro da pasta /class, se houver este arquivo ele será requisitado no momenta de sua instanciação. Com isso podemos dizer que toda vez que eu criar um objeto, Ex: $teste = new Teste(), automaticamente estará sendo verificado se existe a classe Teste da pasta /class, se houver este arquivo será carregado através do reuire e a instanciação será válida.
</p>