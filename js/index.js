function randon_show(){
	var c = document.getElementById('content_show');	
	var content = document.getElementById('content').value;
	var content_separados = nomes.split(String("_"));
	var i = 0;
	var velocidade 	= 50;
	var tempo 		= 2000;
	var intervalo = window.setInterval(function() {
				if (i >= content_separados.length)
					i = 0;
				c.value = content_separados[i++];
			}, velocidade);
	window.setTimeout(function() {
				clearInterval(intervalo);
				var n = Math.floor(Math.random()*content_separados.length);
				c.value = content_separados[n];
			}, tempo);

	document.getElementById("content_show").innerHTML = intervalo;
}
