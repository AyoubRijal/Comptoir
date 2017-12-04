
<?php
	// variables
    include_once('connecte.class.php');
        $cnx = new Connecte;
        $cnx->Connecter();
        
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Commandes</title>
</head>
<body>
 
        <select  class="op" name="table"  class="col-md-6">
            <?php
  $reponse = $bdd->query(" SELECT  DISTINCT Code_client , societe , ville , region , adresse , pays , code_postal from clients");
    echo "<option> Choisis le client  </option>";
		      while($donnees = $reponse->fetch())
		      { 
	 	     ?>
<option data-adresse="<?php echo $donnees['adresse'] ?>" 
        data-ville ="<?php echo $donnees['ville'] ?>"
        data-region="<?php  echo $donnees['region'] ?>"
        data-codepostal="<?php echo $donnees['code_postal'] ?>" 
        data-pays="<?php echo $donnees['pays'] ?>" 
        data-code= "<?php  echo $donnees['Code_client'] ?> " 
        
        value= "<?php  echo $donnees['Code_client'] ?> "> 
         <?php echo $donnees['societe']; ?>
</option>
  		    <?php	
	           }
			 $reponse->closeCursor();
  		    ?>
  	    </select>
    <br>
    <input type="text" class="adresse" value="" disabled >
    <input type="text" class="ville" value="" disabled >
    <br>
    <input type="text" class="region" value="" disabled >
    <input type="text" class="codePostal" value="" disabled >
    <br>
    <input type="text" class="pays" value="" disabled>
    
    
    
    
    
    <!-- Il faut une class  client -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html> 