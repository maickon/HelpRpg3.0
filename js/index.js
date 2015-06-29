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
}
