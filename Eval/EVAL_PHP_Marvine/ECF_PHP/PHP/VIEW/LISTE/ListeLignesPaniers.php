<?php

 echo '<main>';

 echo '<div class="flex-0-1"></div>';

 echo '<div>';

$idUtilisateur=$_SESSION["utilisateur"]->getIdUtilisateur();
$panier= PaniersManager::getList(null,["IdClient"=>$idUtilisateur]);
if($panier != false){
	$objets = LignesPaniersManager::getList(null,["IdPanier"=>$panier[0]->getIdPanier()]);
}

if(isset($objets)){



	//Création du template de la grid
	echo '<div class="grid-col-4 gridListe">';

	echo '<div class="caseListe titreListe grid-columns-span-4">Liste des LignesPaniers </div>';
	echo '<div class="caseListe grid-columns-span-4">
	<div></div>
	<div class="caseListe"><a href="index.php?page=FormLignesPaniers&mode=Ajouter"><i class="fas fa-plus"></i></a></div>
	<div></div>
	</div>';

	echo '<div class="caseListe labelListe">Article</div>';
	//echo '<div class="caseListe labelListe">IdPanier</div>';
	echo '<div class="caseListe labelListe">Quantite</div>';

	//Remplissage de div vide pour la structure de la grid
	echo '<div class="caseListe"></div>';
	echo '<div class="caseListe"></div>';
	//echo '<div class="caseListe"></div>';

	// Affichage des ennregistrements de la base de données
	foreach($objets as $unObjet)
	{	
	echo '<div class="caseListe donneeListe">'.ArticlesManager::findById($unObjet->getIdArticle())->getLibelleArticle().'</div>';
	//echo '<div class="caseListe donneeListe">'.$unObjet->getIdPanier().'</div>';
	echo '<div class="caseListe donneeListe">'.$unObjet->getQuantite().'</div>';
	//echo '<div class="caseListe"> <a href="index.php?page=FormLignesPaniers&mode=Afficher&id='.$unObjet->getIdLignePanier().'"><i class="fas fa-file-contract"></i></a></div>';
														
	echo '<div class="caseListe"> <a href="index.php?page=FormLignesPaniers&mode=Modifier&id='.$unObjet->getIdLignePanier().'"><i class="fas fa-pen"></i></a></div>';
														
	echo '<div class="caseListe"> <a href="index.php?page=FormLignesPaniers&mode=Supprimer&id='.$unObjet->getIdLignePanier().'"><i class="fas fa-trash-alt"></i></a></div>';
	}
	//Derniere ligne du tableau (bouton retour)
	echo '<div class="caseListe grid-columns-span-4">
		<div></div>
		<a href="index.php?page=Catalogue"><button><i class="fas fa-sign-out-alt fa-rotate-180"></i></button></a>
		<div></div>
	</div>';

	echo'</div>'; //Grid
}else{
	echo '<div class="center">Pas de panier en cours</div>';
}

echo'</div>'; //Div
echo '<div class="flex-0-1"></div>';
echo '</main>';