<?php

var_dump($_SESSION);

	ob_start();
	?>
	<form method="post" action="">
		<label>Prenom</label><input type="texte" value="<?php if(isset($_SESSION)) {echo $_SESSION['Prenom'];} ?>" name="prenom" />
		<label>Nom</label><input type="texte" value="<?php if(isset($_SESSION)) {echo $_SESSION['Nom'];} ?>" name="nom" />
		<label>Téléphone</label><input type="texte" value="<?php if(isset($_SESSION)) {echo $_SESSION['Tel'];} ?>" name="tel" />
		<label>Date de Naissance</label><input type="texte" value="<?php if(isset($_SESSION)) {echo $_SESSION['DateNaissance'];} ?>" name="datenaissance" />
		<label>adresse mail</label><input type="texte" value="<?php if(isset($_SESSION)) {echo $_SESSION['Mail'];} ?>" name="mail" />
		<label>mot de passe</label><input type="texte" value="" name="mdp"  />
		
		
		<label>Adresse</label><input type="texte" value="<?php if(isset($_SESSION)) {echo $_SESSION['Adresse'];} ?>" name="adresse" />
		<label>Code Postal</label><input type="texte" value="<?php if(isset($_SESSION)) {echo $_SESSION['CP'];} ?>" name="cp" />
		<label>Ville</label><input type="texte" value="<?php if(isset($_SESSION)) {echo $_SESSION['Ville'];} ?>" name="ville" />
		<label>Pays</label><input type="texte" value="<?php if(isset($_SESSION)) {echo $_SESSION['Pays'];} ?>" name="pays" />
		
		<input type="submit" name="modifier" value="Modifier" />
		<input type="reset" name="annuler" value="Annuler" />
	</form>

	<?php
	$contenu = ob_get_clean();




require('c/gabaritC.php');
?>


