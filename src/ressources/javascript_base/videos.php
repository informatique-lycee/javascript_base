<?php
global $videos;

$p5js_videos = array(
	'p5js_base_intro'=>array(
		'title' => "Introduction à processing" ,
		'src'  => 'p5js_base/introduction_a_Processing.mp4',
		'type'=> 'video/mp4' 
	)
);


$videos=array_merge($videos,$p5js_videos);

/* Pour utiliser la vidéo de test, 

il faut avoir la définition de la vidéo

$new_videos=array(
		'test'=>array(
		'title' => "Test" ,
		'src'  => 'livre-jeu/test.mp4',
		'type'=> 'video/mp4' 
	),
);

fusionner le tableau vidéo avec les vidéos existantes

$videos = array_merge($videos,$new_videos);

il faut inclure un bouton dans le HTML:
			<button type="button"
								class="btn btn-primary" 
								data-toggle="modal" 
								data-activite="livre-jeu"
								data-video="test"
								data-target="#VideoModal" >
								Voir la vidéo 	<i class="fa fa-film"></i> 
			</button>

C'est tout
*/