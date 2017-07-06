<?php

require_once('lib/site/functions.php');

register_activity('javascript_base',array(
		'category'=>'informatique',
		'section'=>'javascript',
		'type'=>'url',
		'titre'=>'Apprendre le javascript',
		'auteur'=>"Laurent COOPER d'après David ROCHE",
		'URL'=>'index.php?page=javascript_base_intro&activite=javascript_base',
		'commentaire'=>"Dans cette série d'activité, David ROCHE se propose de nous introduire au langage de programmation JAVASCRIPT utilisé par les navigateurs web",
		'directory'=>'javascript_base',
		'icon'=>'devicon-javascript-plain colored',
		'prerequis'=>NULL
	)
);
