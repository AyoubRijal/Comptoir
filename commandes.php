<?php
	// variables
    include_once('connecte.class.php');
        $cnx = new Connecte;
        $cnx->Connecter();
        
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Commandes</title>
</head>
<body>
 
    <form action="" method="">
        <select name="table"  class="col-md-6">
            <?php
            $reponse = $bdd->query('SELECT Code_client , societe , ville , Region , adresse , pays , code_postal from clients');
		      while($donnees = $reponse->fetch())
		      { 
	 	     ?>
	 	         <option data-adresse="<?php echo $donnees['adresse'] ?>" data-pays="<?php echo $donnees['pays'] ?>" data-codepostal="<?php echo $donnees['code_postal'] ?>" data-region="<?php  echo $donnees['Region'] ?>" 
                         id="choix" <?php "value= ". $donnees['Code_client']; ?>> <?php echo $donnees['societe']; ?></option>
  		    <?php	
	           }
			 $reponse->closeCursor();
  		    ?>
  	 </select>
    <input type="text" id="d" value="">
    </form>
    <form action="" method="get" id="form1">
    </form>
    <!-- Il faut une class  client -->
    <script src='js/jquery-3.2.1.min.js'></script>
    <script src="js/main.js"></script>
</body>
</html> 