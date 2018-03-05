<?php
require_once("fonctions.php");


// class Connexion extends Fonctions
// {

	function connexion($mail, $mdp)
	{
		// $sql='SELECT Count(Mail) as countmail FROM utilisateurs WHERE Mail=?';
		// $result = $this->executerRequete($sql, array($mail));
		$sql='SELECT Count(Mail) as countmail FROM utilisateurs WHERE Mail="'.$mail.'"';
		$result=executerRequete('SELECT Count(Mail) as countmail FROM utilisateurs WHERE Mail="'.$mail.'"');
		
		//si le mail n'est pas correct, alors j'ai 0 ligne dans ma variable result.
		//si le mail est correct, j'ai 1 ligne
		var_dump($result);
		if($result['countmail']==0)
		{
			$ok=0; //"l'adresse mail saisie n'est pas bonne";
		}
		Else
		{
			//si le mail est correct alors je test le MDP
			$result=executerRequete('SELECT * FROM utilisateurs WHERE Mail="'.$mail.'"');
			if($result['Mdp']!=$mdp) //si le mail est différent du champ Mdp trouvé dans la base alors erreur
			{
				$ok=1; //"le mot de passe saisie n'est pas bon";
			}
			else
			{
				$ok=$result;
			}
		}
		return($ok);
	}


// }


/*
global $DB;
        $query = 'SELECT id,title,date FROM events WHERE YEAR(date)='.$year;
        $r = array();
        
         * Ce que je veux $r[TIMESTAMP][id] = title
         
        while($d = $DB->query($query)){
            $r[strtotime($d->date)]$d->id] = $d->title;
        }
        return $r;
		
		
		
		 global $DB;
        $req = $DB->query('SELECT id,title,date FROM events WHERE YEAR(date)='.$year);
        $r = array();
       
         *e que je veux $r[TIMESTAMP][id] = title
         
        while($d = $req->fetch(PDO::FETCH_OBJ)){
            $r[strtotime($d->date)]$d->id] = $d->title;
        }
        return $r;
		*/
?>