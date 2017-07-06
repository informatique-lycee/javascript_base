salutations= function (nom,age) {
	var phrase='Bonjour '+nom+' ,vous avez '+age+' ans.';
	if ( age >= 18 ) {
 		phrase = phrase + " Je vois que vous êtes majeur.";
	} else {
		phrase = phrase + " Vous n'êtes pas encore majeur à ce que je vois !";
	}
 return phrase;
}
document.write(salutations('Adélaide',19));
document.write('<br/>');
document.write(salutations('Marco',17));