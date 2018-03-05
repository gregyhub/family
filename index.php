<?php
session_start(); 


$action="connexion";
if(isset($_SESSION['connecter'])) 
{
	if($_SESSION['connecter']=='LogIn')
	{
		if(isset($_GET['action'])) 
		{
			$action=$_GET['action'];
		}
		else
		{
			$action="accueil";
		}
	}
}


switch($action)
{
	case 'connexion':
	require('c/connexionC.php');
	break;

	case 'accueil':
	require('c/accueilC.php');
	break;
 
	case 'profil':
	require('c/profilC.php');
	break;
	
	default :
	require('c/errorC.php');
	break;
}


?>