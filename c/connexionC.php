<?php
require('m/connexionM.php');


//quand le visiteur clique sur le bouton connexion
if(!empty($_POST["connexion"]) and $_POST["connexion"]==='Se Connecter')
{
	//je récupère les données du formulaire le mail et le mot de passe
	$mail=$_POST["mail"];
	$mdp=$_POST["mdp"];
	
	//je teste le mail et le mdp dans ma bdd
	$info=connexion($mail, $mdp);
	//la variable OK contient soit 0 (erreur adresse mail), 1 (erreur mdp) ou le resultat de la requete si les champs sont bons
	$error=NULL;
	if(!is_numeric($info))
	{
		$_SESSION=$info;
		$_SESSION['connecter']="LogIn";$
		$_GET['action']="accueil";
		header('Location: index.php');
		exit;
	}
	else if($info===0)
	{
		$error="l'adresse mail saisie n'est pas bonne";
	}
	else if($info===1)
	{
		$error="le mot de passe saisie n'est pas bon";
	}
}	


require('v/connexionV.php');

//j'inclue les vue de ma page connexion
//inclureVue('connexion', $contenu);
//	include('/c/teteC.php');
//	include('/v/connexionV.php');
//	include('/v/pied.php');


?>