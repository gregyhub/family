<?php 


//soit la variable de session n'exsiste pas encore soit elle est égale a LogOut, donc le visiteur n'est pas connecté
if(empty($_SESSION))
{
	//xor $_SESSION['connecter']=="LogOut"
	//quand le visiteur n'est pas connecté le formulaire doit s'afficher
	ob_start();
	?>
	<form method="post"action="">
		<label>adresse mail</label><input type="texte" value="<?php if(isset($mail)) {echo $mail;} ?>" name="mail" required />
		<label>mot de passe</label><input type="texte" value="" name="mdp" required />
		<input type="submit" name="connexion" value="Se Connecter" />
		<input type="reset" name="annuler" value="Annuler" />
	</form>
	<p><?php if(!empty($error)) {echo $error;} ?> </p>
	<?php
	$contenu = ob_get_clean();
}

require('c/gabaritC.php');

?>