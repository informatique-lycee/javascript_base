var protections=['coque du vaisseau','bouclier énergétique','mega bouclier'];

while (protections.length >0 ) {
	document.write("Votre meilleure protection est : "+protections[protections.length-1]);
	document.write("<br> ZAAAAAPPPPP ! <br>");
	protections.pop();
}

document.write("votre vaisseau a été détruit !");