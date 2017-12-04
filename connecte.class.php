<?php
header('Content-type: text/html; charset=utf-8');
class Connecte{
    public function Connecter()
    {
    try
		{
            $GLOBALS['bdd'] = new PDO("mysql:host=localhost;dbname=comptoir;charset=utf8", 'root', '');
            $GLOBALS['bdd']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e)
		{
       		  echo 'Erreur : ' . $e->getMessage();
		}
      //     $GLOBALS['reponse'] = $bdd->query($req);
        /*
		  while($donnees = $reponse->fetch())
		    {
	 	       echo $donnees[0]."</br>";

	       }
			$reponse->closeCursor();
            */

    }
    public function AfficheTable($table){

       $rep = $GLOBALS['bdd']->query('SELECT * FROM '.$table);
        while( $donnees = $rep->fetch()){

        }
        $rep->closeCursor();
         /* $i=0;
        $requete = $GLOBALS['bdd']->prepare("SELECT * FROM $table");
        $requete->execute();
        $rslt = $requete->fetchall();
        print_r($rslt);
        */

    }
     public function  RequetSql($rq){
       $rep = $GLOBALS['bdd']->query($rq);
        $d = $rep->fetch();
            return $d ;
        }
      }
?>
