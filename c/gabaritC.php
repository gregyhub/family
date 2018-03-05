<?php

//si je clique sur le bouton déconnexion
if(!empty($_POST["deconnexion"]) and $_POST["deconnexion"]==='Se Deconnecter')
{
	$_SESSION=array();
	session_destroy();
	header('Location: index.php');
	exit;
}

if(isset($_SESSION['connecter']) and $_SESSION['connecter']=='LogIn')
{
	ob_start();
	?>
	<form method="post"action="">
		<input type="submit" name="deconnexion" value="Se Deconnecter" />
	</form>
	<?php
	$boutonDeco = ob_get_clean();
}

//pour définir le bouton 'active' dans le menu avec la class = "current-page-item"
$activ="current-page-item";



//j'inclue les vue de ma page acceuil
include('v/gabarit.php');



?>