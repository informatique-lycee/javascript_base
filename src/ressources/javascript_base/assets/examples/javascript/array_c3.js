var premiers=[2];
var nMax = 1000;

// Construction du tableau

for (var n=3; n<nMax+1 ; n++) {
	var estPremier = true;
	premiers.forEach(function(e){
		if ( n%e == 0 ) { 
			estPremier = false;
		}
	});
	if (estPremier) {
		premiers.push(n);
	}
}

// Affichage

document.write("Liste des nombres premiers de 1 à "+nMax+" : <br>");
premiers.forEach(function(e){
	document.write(e+" ");
});
