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
<ul>
	<li><h4>Classe - Atributos</h4></li>
	<p>
		No RPG de D&D todo o personagem possui 6 habilidades base. Para saber o valor inicial destas habilidades se faz necessário a rolagem de 4 dados de 6 faces descartando o menor número.
	</p>
	<p>
		Desta forma se faz necessário um algoritimo que simule a rolagem deste 6 dados descartando o menor número entre eles.
	</p>
	<p>
		A classe atributos contém apenas um único atributo de classe [$atributos], este será um array que manterá um referência para cada uma das 6 habilidades base.
	</p>
	<p>
		<ul>
			<li>function __set($propriedade, $valor)</li>
			<p>
			Esta classe possui o metodo mágico __set($propiedade, $valor) que vai interceptar uma atribuição a uma propieade inexistente da classe Atributos. Ao identificar que o atributo não existe, ele vai pegar este nome. Ex: $objeto->força como a propiedade forca não existe, ela será adicionada no array $atrubutos na posição indexada chamada $valor.
			</p>
			
			<li>function __get($propriedade)</li>
			<p>Quando você acessar uma propriedade que não existe no objeto, ela será interceptada pelo método __get() que fará uma busca no array propiedades e retornará o suposto atributo caso ele exista na lista.</p>
		
			<li>function dgd_habilidades()</li>	
			<p>Este método é responsável por gerar as rolagens de dado. Ele simula a rolagem de 6 dados de 6 faces, esta rolagem vai se repetir caso o resultado seja menor do que 8.</p>
			<p>Após armazenar 4 valores aleatorios entre 1 a 6 am cada variável, haverá um identificação para saber qual dos quatros valores é o menor. Uma vez que tenha identificado o menor valor, o mesmo será subtraido do valor total dos números sorteados.</p>

			<li>function dgd_modificador($attr)</li>
			<p>Esta função vai gerar um modificador de habilidade. No RPG de D&D toda habilidade possui um modificador e um modificador é um valor equivalente a ($att-10)/2 arredondado para cima.</p>

			<li>function dgd_bonus_adicional($nivel)</li>
			<p>Este método vai gerar um ponto de habilidade para somar aos atributos a cada 4 $niveis.</p>
		</ul>	
	</p>
	<li><h4>Classe - Perícias</h4></li>	
	<li><h4>Classe - Testes de Resistencia</h4></li>
	<p>
		Esta classe vai representar os testes de resistência de um personagem de D&D. O valor base de um teste de resistência vai depender do nível do personagem. Existem dois tipos de testes que são os ruins e os bons. Abaixo a explicação da implementação de cada um.

		<ul>
			<li>function dg_teste_bom($nivel)</li>
			<p>Este teste é simples por ele será 2 no nível 1 e a cada dois níveis de personagem ele aumenta 2.</p>

			<li>function dg_teste_ruim($nivel)</li>
			<p>Este teste é mais complicado um pouquinho. Até o segundo nível de personagem o seu bônus está em zero. Depois disso pelos próximos 3 níveis ele vai aumentando de um em um. Ex: Lv 3,4,5 será +1, Lv 6,7,8 será +2 e assim por diante.</p>
			<p>Seu algoritmo primeiro identifica se o nível é menor do que 2, se for o seu bônus será 0. Do contrário verifica se o nível é menor do que 0 pois ser for nada deverá ser feito. Entretanto se não for menor do que 0, percorreremos o nível do personagem partindo do 0 e verificamos quando o índice for 2 (no caso 2 é como se fosse 3 por começar em 0).
			</p> 
			<p>se for 2 incrementaremos uma variável que representa a resistência ruin em 1, esta variavel começa em zero e vai aumentando. Após isso zeramos o índice para começar a percorre-la novamente e diminuimos o nível em 3. Por conta disso o loop será menor a cada vez que a variável de resistência ruim for incrementada. Quando o índice não conseguir mais ser iguel a 2 o loop terminará e teremos armazenado na variável $resistencia_ruin o valor total de um teste de resistência conforme o nível informado.</p>
		</ul>
	</p>

	<li><h4>Classe - Perícias</h4></li>	
	<li><h4>Classe - Testes de Resistencia</h4></li>
</ul>
	
<p></p>

<h2><a name="basic-class">Classe Classes Básicas de D&D</a></h2>
<ul>
	<li><h4>Classe - classes</h4></li>
	<p>
		A classe Classes representa todas as classe básicas do jogo de RPG D&D. Ela prover todos os métodos base que uma classe deve ter. Por conta disso ela não é uma classe concreta e não pode ser instanciada, por isso ela é declarada como abstrata. Além disso ela implementa a interface IClasses, esta interface estabelece todos os métodos comuns que as classes básicas devem ter inplementado.

		<ul>
			<li>function __construct()</li>
			<p>O método construtor vai chamar todos os outros métodos estabelecidos na interface de sua classe pai.</p>

			<li>function dgd_pts_pericias()</li>
			<p>No RPG D&D cada classe possui um dado de vida em específico, o DV do bárbaro é 12. Este método apenas inicializa o atributo de dados de vida em 12.</p>

			<li>function dgd_talentos()</li>
			<p>Cada classe possui a sua lista de talentos. este método apenas inicializa uma lista (array) com os talentos previsto na classe de Bábaro.</p>

			<li>function dgd_kit()</li>
			<p>Este método visa inicializa uma lista contento todos os itens que um barbaro carrega consigo.</p>

			<li>function dgd_pericias()</li>
			<p>Aqui será preenchido uma lista (array) com referência a todas as perícias que um barbaro pode ter.</p>
			<p>E também uma outra lista de perícias que não fazer parte da lista do barbaro mas que mesmo assim ele poderá ter com penalidades.</p>

			<li>function dgd_armas()</li>
			<p>Este método será responsável por inicializar as possíveis armas que um bárbaro vai estar usando.</p>

			<li>function dgd_armaduras()</li>
			<p>Este método será responsável por inicializar as possíveis armaduras que um bárbaro vai estar usando.</p>

			<li>function dgd_testes_de_resistencia($nivel)</li>
			<p>Este método vai inicializar os três atributos que resprentam os testes de risistência de um personagem de D&D. Para isso ele vai precisar instanciar um objeto Testes_de_resistencia();. Essa instanciação já foi feita no método construtor e sua referência armazenada no atributo teste_de_resistencia. Como temos um objeto em teste_de_resistencia, basta fazer a chamada de cada método da classe Testes_de_resistencia() através dos comando:
			<br>
			$this->fortitude = $this->teste_de_resistencia->dg_teste_bom($nivel);
			O código acima inicializa a atributo fortitude chamando um teste de resistência bom. 
			$this->reflexos  = $this->teste_de_resistencia->dg_teste_ruim($nivel);
			O código acima faz a mesma coisa do anterior, porém ele armazena no atributo reflexos e além disso está chamando o método de teste de resistência ruin.
			</p>	
		</ul>
	</p>	
	<p>
		Esta classe possui as métodos mágicos descrito em outras classes acima. A ideia é a mesma, intercepetar atribuição e retorno de atributos inexistentes para coloca-lo no array $atributos que é a única propiedade da classe.
	</p>
	<li><h4>Classe - Barbaro</h4></li>	
	<p>
		Estas classes mais específicas vão implementar os métodos estabelecidos na interface de sua classe abstrata pai (Classes). Aqui casa classe vai definir como funcionará o comportamento de seus métodos. Embora as classes sejam diferentes, elas implementam os mesmos métodos, porém de maneiras distintas (viva o polimosfismo! rsrs)
	</p>

	<li><h4>Classe - Barbaro</h4></li>	
	<li><h4>Classe - Druida</h4></li>
	<li><h4>Classe - Ranger</h4></li>	
	<li><h4>Classe - Monge</h4></li>
	<li><h4>Classe - Clérigo</h4></li>	
	<li><h4>Classe - Paladino</h4></li>
	<li><h4>Classe - Mago</h4></li>	
	<li><h4>Classe - Feiticeiro</h4></li>
	<li><h4>Classe - Ladino</h4></li>	
	<li><h4>Classe - Bardo</h4></li>
</ul>
<p></p>

<h2><a name="character">Classe Personagens</a></h2>

<p>
	Esta classe vai estabelecer todas as características a forma do personagem e aparencia e o seu nível de personagem.
</p>

<p>
	Esta classe possui as métodos mágicos descrito em outras classes acima. A ideia é a mesma, intercepetar atribuição e retorno de atributos inexistentes para coloca-lo no array $atributos que é a única propiedade da classe.
</p>

<p>
	<ul>
		<li>public function dgd_nivel($nivel = null)</li>
		<p>Gera um número aleatório entre 1 a 99, se o parametro for informado, o nível máximo do personagem será o valor do parâmetro.</p>

		<li>public function dgd_nome()</li>
		<p>Gera um nome para o personagem. Este método retorna um elemento de um array de forma sorteada. Esta array contém todoas os nomes disponíveis.</p>

		<li>public function dgd_sexo()</li>
		<p>Sorteia entre duas opções (masculino e feminino) o sexo do personagem.</p>

		<h4>Todos os métoso abaixo visam inicializar um atributo da classe Personagem. Este atributo será o retorno do sorteio, ou seja o intem escolhido aleatóriamnete através da lista oferecida pelo método.</h4>
		<li>public function dgd_cor_do_cabelo()</li>
		<p>Sorteia uma cor de cabelo para o personagem através de um array.</p>

		<li>public function dgd_estilo_do_cabelo($sexo)</li>
		<p>Define qual será o estilo de cabelo do personagem, Ex: raça fare, com granja, emo etc. Existem estilos femininos e masculinos e por isso se faz necessário o uso do parametro para a tomada de decisão. Conforme os métodos anteriores a escolha de forma aleatória é operada sobre um array com todas as opções disponíveis.</p>

		<li>public function dgd_estilo_do_cabelo_masculino()</li>
		<p>Este método armazena a lista de lista de estilos de cabelo masculinos.</p>

		<li>public function dgd_estilo_do_cabelo_feminino()</li>
		<p>Este método armazena a lista de lista de estilos de cabelo femininos.</p>

		<li>public function dgd_cor_dos_olhos()</li>
		<p>Escolhe de forma aleatória sobre uma lista de tipos de olhos para o seu personagem.</p>

		<li>public function dgd_cor_da_pele()</li>
		<p>Vai operar também sobre uma lista de nomes com cores de pelo e retornará um item da lista de forma aleatória.</p>

		<li>public function dgd_estilo_do_nariz()</li>
		<p>Escolhe de forma aleatória sobre uma lista de tipos nariz para o seu personagem.</p>

		<li>public function dgd_estilo_da_boca()</li>
		<p>Escolhe de forma aleatória sobre uma lista de tipos bocas para o seu personagem.</p>

		<li>public function dgd_estilo_da_sobrancelha()</li>
		<p>Escolhe de forma aleatória sobre uma lista de tipos sobrancelhas para o seu personagem.</p>

		<li>public function dgd_estilo_do_rosto()</li>
		<p>Vai retornar de forma aleatória um estilo de rosto conforme o array rosto oferece.</p>

		<li>public function dgd_estilo_de_olho()</li>
		<p>Este método armazena a lista de lista de estilos de olhos e retorna um elemento da lista de forma aleatória.</p>

		<li>public function dgd_estilo_de_queixo()</li>
		<p>Vai retornar dentro de umarray com o nome de vários tipos de quixo, apenas um elemento do array.</p>

		<li>public function dgd_estilo_de_testa()</li>
		<p>Retorna um estilo de testa sorteado na lista de testas disponíveis no método.</p>

	</ul>	

</p>

<p></p>


<h2><a name="races">Classe Raças</a></h2>
<ul>
	<li><h4>Classe - Humano</h4></li>
	<li><h4>Classe - Orc</h4></li>	
	<li><h4>Classe - Anão</h4></li>
	<li><h4>Classe - Elfo</h4></li>	
	<li><h4>Classe - Meio-Elfo</h4></li>
	<li><h4>Classe - Halfing</h4></li>	
</ul>
	
<p></p>

<h2><a name="test">Classe de Teste</a></h2>
<ul>
	<li><h4>Classe - Test</h4></li>
	<li><h4>Classe - Teste Barbaro</h4></li>	
	<li><h4>Classe - Teste Personagem</h4></li>
	<li><h4>Classe - Teste Raças</h4></li>	
</ul>
<p></p>

