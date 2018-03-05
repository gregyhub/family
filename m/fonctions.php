<?php
require_once('m/bdd.php');

// class Fonctions extends Modele
// {


	function executerRequete($requete)
	{
		
		$query = 'SELECT Mail FROM utilisateurs';
		$bdd=getBDD();
		$reponse = $bdd->query($requete);
		$reponse->setFetchMode(PDO::FETCH_ASSOC);
		return($reponse->fetch());
	}
	// Exécute une requête SQL éventuellement paramétrée
	// function executerRequete($sql, $params = null)
	// {
		// if ($params == null)
		// {
			// $resultat = $this->getBdd()->query($sql);    // exécution directe
		// }
		// else
		// {
			// $resultat = $this->getBdd()->prepare($sql);  // requête préparée
			// $resultat->execute($params);
		// }
		// return $resultat;
	// }
// }
	
?>