
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
<div claswxs="formulaire_commandes" style="width:800px;margin: 5% auto">
<!--  scociete  champs CLIENTS -->
  <div class="partclient" style="float:left;width:400px">
      <label for="table"> facturér a : </label>
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
        data-societe ="<?php echo $donnees['societe'] ?>"
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
  </div>
  <div style="">
  </div>
  <div class="partclient" style="float:right;width:400px">
    <label for=""> Envoyé a :</label>
    <input type="text" class="societe" value="">
    <br>
     <input type="text" class="adresse" value="" >
     <input type="text" class="ville" value=""  >
     <br>
     <input type="text" class="region" value=""  >
     <input type="text" class="codePostal" value=""  >
     <br>
     <input type="text" class="pays" value=""><br>
     <input type="radio" name="check" class="massagers" value="Speedy">Speedy
     <input type="radio" name="check" class="massagers" value="United">United
     <input type="radio" name="check" class="massagers" value="Federal">Federal
  </div>

  <div class="">
  <!-- Repreésentant = nom&prénom table employes -->
    <label for="employes">Représentant</label>
    <select>
    <?php
    $reponse = $bdd->query(" SELECT  DISTINCT nom , prenom  from employes");
      echo "<option> Choisis l'Emloyé  </option>";
      while($employes = $reponse->fetch())
          {
    ?>
      <option data-nom="<?php echo $employes['nom'] ?>"
          data-prenom ="<?php echo $employes['prenom'] ?>"
          value= "<?php   ?> ">
           <?php echo $employes['nom'] ." ". $employes['prenom'] ; ?>
      </option>
    <?php
         }
          $reponse->closeCursor();
    ?>
    </select>
    <br><br>
    <label for="ncommande">N° Cmd :</label>
    <input type="text" name="ncommande" class="nCommande" value="" style="width:50px">
    <label for="dateCommande">Date Cmd :</label>
    <input type="date" name="dateCommande" class="dateCommande" value="" style="width:130px">
    <label for="livreAvant">Livrer Avant :</label>
   <input type="date" name="livreAvant" class="livreAvant" value="" style="width:130px">
   <label for="dateEnvoi">Date envoi :</label>
  <input type="date" name="dateEnvoi" class="dateEnvoi" value="" style="width:130px">
  </div>
</div>
    <!-- Il faut une class  client -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
