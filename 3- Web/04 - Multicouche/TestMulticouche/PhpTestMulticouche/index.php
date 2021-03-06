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

	"ListeArticles"=>["PHP/VIEW/LISTE/","ListeArticles","Liste Articles",0,false],
	"FormArticles"=>["PHP/VIEW/FORM/","FormArticles","Formulaire Articles",0,false],
	"ActionArticles"=>["PHP/CONTROLLER/ACTION/","ActionArticles","Action Articles",0,false],

	"ListeClients"=>["PHP/VIEW/LISTE/","ListeClients","Liste Clients",0,false],
	"FormClients"=>["PHP/VIEW/FORM/","FormClients","Formulaire Clients",0,false],
	"ActionClients"=>["PHP/CONTROLLER/ACTION/","ActionClients","Action Clients",0,false],

	"ListeCommandes"=>["PHP/VIEW/LISTE/","ListeCommandes","Liste Commandes",0,false],
	"FormCommandes"=>["PHP/VIEW/FORM/","FormCommandes","Formulaire Commandes",0,false],
	"ActionCommandes"=>["PHP/CONTROLLER/ACTION/","ActionCommandes","Action Commandes",0,false],

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