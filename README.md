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
	<li><a href="#into">Introducão</a></li>
	<li><a href="#autoload">Classe Autoload</a></li>
	<li><a href="#tags">Classe Tags</a></li>
	<li><a href="#algoritm">Classe Algoritmons</a></li>
	<li><a href="#basic-class">Classe Classes Básicas D&D</a></li>
	<li><a href="#character">Classe Personagem</a></li>	
	<li><a href="#races">Classe Raças</a></li>
	<li><a href="#test">Classe Testes</a></li>
</ul>


<h2><a name="into">Introdução</a></h2>
<p>
	A página principal verifica se existe o arquivo de inicializacao chamado init.php. Se existir carrega por require e logo em seguida instancia um objeto de teste para se criar um peronagem, do contrário exibe uma mensagem de erro.
<h6>Arquivo Init.php</h6>
	Este arquivo verifica se existe a classe Autoload.class.php no diretório /class, se existir será instanciado um objeto autoload new Autoload(), do contrário será exibido uma mensagem de erro.
</p>


<h2><a name="autoload">Classe Autoload</a></h2>
<p>
	Esta classe possui em seu método contrutor uma chamada ao mátodo mágico _autoload($classname). Este método intercepta qualquer instanciação feita caso a classe não exista (nao tenha um caminho válido por require ainda). Dessa forma o método _autoload($classname) vai aceitar por parametro o nome da classe que vem automaticamente. Com este nome o metodo vai fazer o seu devido tratamento. 
</p>

<p>
	Ele vai verificar se existe um arquivo de classe dentro da pasta /class, se houver este arquivo ele será requisitado no momenta de sua instanciação. Com isso podemos dizer que toda vez que eu criar um objeto, Ex: $teste = new Teste(), automaticamente estará sendo verificado se existe a classe Teste da pasta /class, se houver este arquivo será carregado através do reuire e a instanciação será válida.
</p>

<h2><a name="tags">Classe Tags</a></h2>
<p>
	Esta classe provê de métodos magicos que permitem produzir uma tag HTML através de código PHP. Além disso através dos metodos loadJs($js_path) e 
LoadCss(css_path), podemos carregar todos os arquivos que estiverem dentro da pasta especificada como parâmetro destes metodos.
<h3>Seus metodos</h3>
<ul>
	<li>function __call($tag, $propiedades)</li>
	<p>
		Este metodo vai interceptar qualquer chamada de metodo que nao pertenca a esta classe. Ex: Ao chamar este metodo $tag->html(); o metodo __call()
		vai interceptar esta chamada e baseado no nome do metodo chamado, ele vai formar a tag de abertura. Sua saída será assim: <html>. Caso algum parametro
		seja passado como por exemplo $tag->html(class="teste" id="teste"); isso vai produzir a saída <html class="teste" id="teste"> assumindo que o seu único 
		parametro é apenas uma string.	
	</p>
	<li>function __get($tag)</li>
	<p>
		Este metodo é semelhante ao _call, porém ele intercepta chamada de propriedades inexistentes ao objeto corrente. Ex: $tag->html; este codigo vai 
		produzia a saída </html> e com isso teremos a tag de fechamento. 
	</p>
	<li>function imprime($string, $modo=null)</li>
		<p>
			Este metodo serve para imprimir um valor qualquer na tela. Além da estring passada ele aceita um modo que nada mais é do que uma escolha entre 
			o termo <e>encode</e> ou <e>decode</e>.
		</p>
	<li>function loadCss($css_path,$import=false)</li>
		<p>
			Este metodo aceita por parametro um caminho válido onde ele possa encontrar todos os arquivos .css da pasta e possa carrega-lo via HTML conforme 
			um arquivo css externo é carregado. O import como true vai permitir adicionar o termo impot na tag responsável por chamar o arquivo css.
		</p>
		
	<li>function loadClass($class_path)</li>
		<p>
			Este metodo carrega todos os arquivos javascript via HTML desde que seja passado um caminho válido por paremetro.
		</p>
</ul>

</p>

<h2><a name="algoritm">Classe Algoritmos</a></h2>
<p></p>

<h2><a name="basic-class">Classe Classes Básicas de D&D</a></h2>
<p></p>

<h2><a name="character">Classe Personagens</a></h2>
<p></p>

<h2><a name="races">Classe Raças</a></h2>
<p></p>

<h2><a name="test">Classe de Teste</a></h2>
<p></p>

