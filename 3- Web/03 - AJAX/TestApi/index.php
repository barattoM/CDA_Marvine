<?php

include "./PHP/CONTROLLER/Outils.php";

spl_autoload_register("ChargerClasse");

Parametres::init();

DbConnect::init();

session_start();

/******Les langues******/
/***On récupère la langue***/
if (isset($_GET['lang']) && TextesManager::checkIfLangExist($_GET['lang'])) {
	 // tester si la langue est gérée
	$_SESSION['lang'] = $_GET['lang'];
}else if (isset($_COOKIE['lang'])) {
	$_SESSION['lang'] = $_COOKIE['lang'];
}else{
	$_SESSION['lang'] = 'FR';
}
//Crée un cookie lang sur la machine de l'utilisateur d'une durée de 10h.
setcookie("lang", $_SESSION['lang'], time()+36000, '/');
/******Fin des langues******/

$routes=[
	"Default"=>["PHP/VIEW/GENERAL/","Accueil","Accueil",0,false],
	"Accueil"=>["PHP/VIEW/GENERAL/","Accueil","Accueil",0,false],

	"ActionConnexion"=>["PHP/CONTROLLER/ACTION/","ActionConnexion","Action de la connexion",0,false],
	"ActionInscription"=>["PHP/CONTROLLER/ACTION/","ActionInscription","Action de l'inscription",0,false],
	"ActionDeconnexion"=>["PHP/CONTROLLER/ACTION/","ActionDeconnexion","Action de deconnexion",0,false],

	"ListeMailAPI"=>["PHP/MODEL/API/","ListeMailAPI", "ListeMailAPI",0,true],
	"CategorieAPI"=>["PHP/MODEL/API/","CategorieAPI", "CategorieAPI",0,true],
	"ArticleAPI"=>["PHP/MODEL/API/","ArticleAPI", "ArticleAPI",0,true],
	"DescriptionArticleAPI"=>["PHP/MODEL/API/","DescriptionArticleAPI", "DescriptionArticleAPI",0,true],

	"ListeArticles"=>["PHP/VIEW/LISTE/","ListeArticles","Liste Articles",0,false],
	"FormArticles"=>["PHP/VIEW/FORM/","FormArticles","Formulaire Articles",0,false],
	"ActionArticles"=>["PHP/CONTROLLER/ACTION/","ActionArticles","Action Articles",0,false],

	"ListeCategories"=>["PHP/VIEW/LISTE/","ListeCategories","Liste Categories",0,false],
	"FormCategories"=>["PHP/VIEW/FORM/","FormCategories","Formulaire Categories",0,false],
	"ActionCategories"=>["PHP/CONTROLLER/ACTION/","ActionCategories","Action Categories",0,false],

	"ListeTypesProduits"=>["PHP/VIEW/LISTE/","ListeTypesProduits","Liste TypesProduits",0,false],
	"FormTypesProduits"=>["PHP/VIEW/FORM/","FormTypesProduits","Formulaire TypesProduits",0,false],
	"ActionTypesProduits"=>["PHP/CONTROLLER/ACTION/","ActionTypesProduits","Action TypesProduits",0,false],

	"ListeUtilisateurs"=>["PHP/VIEW/LISTE/","ListeUtilisateurs","Liste Utilisateurs",0,false],
	"FormUtilisateurs"=>["PHP/VIEW/FORM/","FormUtilisateurs","Formulaire Utilisateurs",0,false],
	"ActionUtilisateurs"=>["PHP/CONTROLLER/ACTION/","ActionUtilisateurs","Action Utilisateurs",0,false],

];

if(isset($_GET["page"]))
{

	$page=$_GET["page"];

	if(isset($routes[$page]))
	{
		AfficherPage($routes[$page]);
	}
	else
	{
		AfficherPage($routes["Default"]);
	}
}
else
{
	AfficherPage($routes["Default"]);
}