
function  ditBonjour (nom,age) {
	document.write ('Bonjour ');
	document.write (nom);
	document.write (' ,vous avez ');
	document.write (age);
	document.write (' ans.');
	document.write ('<br/>');
	if ( age >= 18 ) {
 		document.write(" Je vois que vous êtes majeur.");
	} else {
		document.write(" Vous n'êtes pas encore majeur à ce que je vois !");
	}
	document.write ('<br/>');
}

ditBonjour('Dominique',17);
ditBonjour('Ernestine',72);