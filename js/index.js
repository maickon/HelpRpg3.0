<<<<<<< HEAD
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
=======
function loop_geral(velocidade, tempo){
	nivel(velocidade, tempo);
}

function nivel(velocidade, tempo){
	var c = document.getElementById('value1');	
	var nomes = document.getElementById('values_list1').value;
	var nomes_separados = nomes.split(String("_"));
	var i = 0;

	var intervalo = window.setInterval(function() {
				if (i >= nomes_separados.length)
					i = 0;
					c.value = nomes_separados[i++];
				}, velocidade);
	window.setTimeout(function() {
				clearInterval(intervalo);
				var n = Math.floor(Math.random()*nomes_separados.length);
				c.value = nomes_separados[n];
			}, tempo);
}

function nome(velocidade, tempo){
	var c = document.getElementById('value2');	
	var nomes = document.getElementById('values_list2').value;
	var nomes_separados = nomes.split(String("_"));
	var i = 0;

	var intervalo = window.setInterval(function() {
				if (i >= nomes_separados.length)
					i = 0;
					c.value = nomes_separados[i++];
				}, velocidade);
	window.setTimeout(function() {
				clearInterval(intervalo);
				var n = Math.floor(Math.random()*nomes_separados.length);
				c.value = nomes_separados[n];
			}, tempo);
>>>>>>> 0e06cdfff5f4cef1916042b7a46fd28602b60cf5
}
