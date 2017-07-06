<?php
/* 

	Pages des tutoriel d'apprentissage de javascript

*/
global $pages;

// Bases du javascript 
$menu_activite=array(
	"titre"=>"Les bases de javascript",
	"contenu"=>[
	'javascript_base_intro',
	'javascript_base_1',
	'javascript_base_2',
	'javascript_base_3',
	'javascript_base_4',
	'javascript_base_5',
	'javascript_base_6',
	'javascript_base_7',
	'javascript_base_8',
	'javascript_base_8a',
	'javascript_base_9',
	'javascript_base_10',
	'javascript_base_11',
	'javascript_base_12a',
	'javascript_base_12b',
	'javascript_base_12c',
	'javascript_base_13',
	'javascript_base_14',
	'javascript_base_15',
	]);

// pages des bases du javascript
$intro_pages= array(
	'javascript_base_intro'=>array(
		"template"=>'javascript_base/introduction.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>NULL,
		'page_suivante'=>'javascript_base_1',
		'titre'=>'introduction',
		'css'=>'html5-css.css'),
	'javascript_base_1'=>array(
		"template"=>'javascript_base/jbase_a1.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_intro',
		'page_suivante'=>'javascript_base_2',
		'titre'=>'Bonjour le monde !',
		'css'=>'html5-css.css'),
	'javascript_base_2'=>array(
		"template"=>'javascript_base/jbase_a2.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_1',
		'page_suivante'=>'javascript_base_3',
		'titre'=>'Variables',
		'css'=>'html5-css.css'),
	'javascript_base_3'=>array(
		"template"=>'javascript_base/jbase_a3.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_2',
		'page_suivante'=>'javascript_base_4',
		'titre'=>'Opérations',
		'css'=>'html5-css.css'),
	'javascript_base_4'=>array(
		"template"=>'javascript_base/jbase_a4.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_3',
		'page_suivante'=>'javascript_base_5',
		'titre'=>'Typage de variables',
		'css'=>'html5-css.css'),
	'javascript_base_5'=>array(
		"template"=>'javascript_base/jbase_a5.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_4',
		'page_suivante'=>'javascript_base_6',
		'titre'=>'Concaténation',
		'css'=>'html5-css.css'),
	'javascript_base_6'=>array(
		"template"=>'javascript_base/jbase_a6.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_5',
		'page_suivante'=>'javascript_base_7',
		'titre'=>'Acquérir des variables',
		'css'=>'html5-css.css'),
	'javascript_base_7'=>array(
		"template"=>'javascript_base/jbase_a7.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_6',
		'page_suivante'=>'javascript_base_8',
		'titre'=>'Tests',
		'css'=>'html5-css.css'),
	'javascript_base_8'=>array(
		"template"=>'javascript_base/jbase_a8.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_7',
		'page_suivante'=>'javascript_base_8a',
		'titre'=>'Branchements conditionnels',
		'css'=>'html5-css.css'),
	'javascript_base_8a'=>array(
		"template"=>'javascript_base/jbase_a8a.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_8',
		'page_suivante'=>'javascript_base_9',
		'titre'=>'Opérateurs logiques',
		'css'=>'html5-css.css'),
	'javascript_base_9'=>array(
		"template"=>'javascript_base/jbase_a9.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_8a',
		'page_suivante'=>'javascript_base_10',
		'titre'=>'Boucles while',
		'css'=>'html5-css.css'),
	'javascript_base_10'=>array(
		"template"=>'javascript_base/jbase_a10.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_9',
		'page_suivante'=>'javascript_base_11',
		'titre'=>'Boucle for',
		'css'=>'html5-css.css'),
	'javascript_base_11'=>array(
		"template"=>'javascript_base/jbase_a11.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_10',
		'page_suivante'=>'javascript_base_12a',
		'titre'=>'Fonctions',
		'css'=>'html5-css.css'),
	'javascript_base_12a'=>array(
		"template"=>'javascript_base/jbase_a12a.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_11',
		'page_suivante'=>'javascript_base_12b',
		'titre'=>'Tableaux : déclarations ',
		'css'=>'html5-css.css'),
	'javascript_base_12b'=>array(
		"template"=>'javascript_base/jbase_a12b.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_12a',
		'page_suivante'=>'javascript_base_12c',
		'titre'=>'Tableaux : manipulations ',
		'css'=>'html5-css.css'),
	'javascript_base_12c'=>array(
		"template"=>'javascript_base/jbase_a12c.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_12b',
		'page_suivante'=>'javascript_base_13',
		'titre'=>'Tableaux : parcours ',
		'css'=>'html5-css.css'),
	'javascript_base_13'=>array(
		"template"=>'javascript_base/jbase_a13.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_12c',
		'page_suivante'=>'javascript_base_14',
		'titre'=>'Portée des variables',
		'css'=>'html5-css.css'),
	'javascript_base_14'=>array(
		"template"=>'javascript_base/jbase_a14.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_13',
		'page_suivante'=>'javascript_base_15',
		'titre'=>"Notion d'objets",
		'css'=>'html5-css.css'),
	'javascript_base_15'=>array(
		"template"=>'javascript_base/jbase_a15.html.twig',
		"menu"=>'javascript_base',
		'page_precedente'=>'javascript_base_14',
		'page_suivante'=>NULL,
		'titre'=>'Conclusion',
		'css'=>'html5-css.css'),

	);

$pages=array_merge($pages,$intro_pages);