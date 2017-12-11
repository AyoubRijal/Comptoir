<DOCTYPE HTML>
	<?php
	 include_once('connecte.class.php');
	 include_once('clients.class.php');
	        $connect = new Connecte;
	        $connect->Connecter();
					$client = new Clients();
					$client->connecter();
	?>
<?php
$code_client='';
$societe='';
$Contact='';
$adresse='';
$fonction='';
$ville='';
$region='';
$pays='';
$code_postal='';
$tel='';
$fax='';

 function getData(){

        $data=array();
        $data[0]=$_POST['_codeclient'];
        $data[1]=$_POST['_societe'];
        $data[2]=$_POST['_contact'];
        $data[3]=$_POST['_adresse'];
        $data[4]=$_POST['_fonction'];
        $data[5]=$_POST['_ville'];
        $data[6]=$_POST['_region'];
        $data[7]=$_POST['_pays'];
        $data[8]=$_POST['_codepostal'];
        $data[9]=$_POST['_telephone'];
        $data[10]=$_POST['_fax'];
          return $data;
}
        //rechercher
			echo	$client->getNcommande();
         if(isset($_POST['rechercher']))
         {
					  $code = getData()[0];
					 $d = $client->recherche($code);
					 $code_client=$d['Code_client'];
					 $societe=$d['Societe'];
					 $Contact=$d['Contact'];
					 $adresse=$d['Adresse'];
					 $fonction=$d['Fonction'];
					 $ville=$d['Ville'];
					 $region=$d['Region'];
					 $pays=$d['Pays'];
					 $code_postal=$d['Code_postal'];
					 $tel=$d['Telephone'];
					 $fax=$d['Fax'];
				}// A SUPP
  /* { -------
        $info= getData();
        $requette="SELECT * FROM clients WHERE `Code_client` ='$info[0]'";
        $resultat_de_Recherche = $bdd->query($requette);
				$count = $resultat_de_Recherche->rowCount();
        if($resultat_de_Recherche)
        {
             if($count != 0)
             {

                  while ($rows = $resultat_de_Recherche->fetch())
                  {
                    $code_client=$rows['Code_client'];
                    $societe=$rows['Societe'];
                    $Contact=$rows['Contact'];
                    $adresse=$rows['Adresse'];
                    $fonction=$rows['Fonction'];
                    $ville=$rows['Ville'];
                    $region=$rows['Region'];
                    $pays=$rows['Pays'];
                    $code_postal=$rows['Code_postal'];
                    $tel=$rows['Telephone'];
                    $fax=$rows['Fax'];
                  }

                }  else{
											// alert mieuxx
                    echo ("aucun data");
                  }
             }else{

               echo ("erreur resultat ");
             }
 }
 --------*/

/*
//ajouter
if(isset($_POST['insert'])){
	$info = getData();
	$requette="INSERT INTO `clients`(`Code_client`,`Societe`,`Contact`,`Fonction`,`Adresse`,`Ville`,`Region`,`Code_postal`,`Pays`,`Telephone`,`Fax`) VALUES(:codeClient,:Societe,:Contact,:Fonction,:Adresse,:Ville,:Region,:codepostal,:Pays,:Telephone,:fax)";
	try{
		$insert=$bdd->prepare($requette);
		$insert->bindParam(':codeClient', $info[0] , PDO::PARAM_STR,5);
		$insert->bindParam(':Societe',$info[1],PDO::PARAM_STR,40);
		$insert->bindParam(':Contact',$info[2],PDO::PARAM_STR,30);
		$insert->bindParam(':Fonction',$info[4],PDO::PARAM_STR,30);
		$insert->bindParam(':Adresse',$info[3],PDO::PARAM_STR,60);
		$insert->bindParam(':Ville',$info[5],PDO::PARAM_STR,15);
		$insert->bindParam(':Region',$info[6],PDO::PARAM_STR,15);
		$insert->bindParam(':codepostal',$info[8],PDO::PARAM_STR,10);
		$insert->bindParam(':Pays',$info[7],PDO::PARAM_STR,15);
		$insert->bindParam(':Telephone',$info[9],PDO::PARAM_STR,24);
		$insert->bindParam(':fax',$info[10],PDO::PARAM_STR,24);
		$insert->execute();
		$count = $insert->rowCount();
		if($count != 0)
			{
				echo("data inserted successfully");

			}else{
				echo("data are not inserted");
			}
		}catch(Exception $ex){
		echo("error inserted".$ex->getMessage());
	}
}
//modifier
if(isset($_POST['update'])){
	$info = getData();
	$update_query="UPDATE clients SET Societe=:codeClient,Contact=:Contact,Adresse=:Adresse,Fonction=:Fonction ,Ville=:Ville,Region=:Region,Pays=:Pays,Code_postal=:codepostal,Telephone=:Telephone,Fax=:fax WHERE Code_client = :codeClient";
	try{
		$insert=$bdd->prepare($requette);
		$insert->bindParam(':codeClient', $info[0] , PDO::PARAM_STR,5);
		$insert->bindParam(':Societe',$info[1],PDO::PARAM_STR,40);
		$insert->bindParam(':Contact',$info[2],PDO::PARAM_STR,30);
		$insert->bindParam(':Fonction',$info[4],PDO::PARAM_STR,30);
		$insert->bindParam(':Adresse',$info[3],PDO::PARAM_STR,60);
		$insert->bindParam(':Ville',$info[5],PDO::PARAM_STR,15);
		$insert->bindParam(':Region',$info[6],PDO::PARAM_STR,15);
		$insert->bindParam(':codepostal',$info[8],PDO::PARAM_STR,10);
		$insert->bindParam(':Pays',$info[7],PDO::PARAM_STR,15);
		$insert->bindParam(':Telephone',$info[9],PDO::PARAM_STR,24);
		$insert->bindParam(':fax',$info[10],PDO::PARAM_STR,24);
		$insert->execute();
		$count = $insert->rowCount();
		if($count != 0){
				echo("data updated");
			}else{
				echo("data not updated");
			}
		}catch(Exception $ex){
		echo("error in update".$ex->getMessage());
	}
}
//delete
if(isset($_POST['delete'])){
	$info = getData();
	$requette = "DELETE FROM `clients` WHERE Code_client = :codeClient";
	try{
		$insert=$bdd->prepare($requette);
		$insert->bindParam(':codeClient', $info[0] , PDO::PARAM_STR,5);
		$insert->execute();
		$count = $insert->rowCount();
			if($count>0)
			{
				echo("data deleted");
			}else{
				echo("data not deleted");
			}
	}catch(Exception $ex){
		echo("error in delete".$ex->getMessage());
	}
}
*/
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">

	</head>
	<body>
		<div id="header">
			<h1>Gestion des Clients</h1>
		</div>
		<div id="content">
			<div id="form">
  			<form action="" method="post" name="test_form">
  				<table id="tbl">
  				<tr>
  					<td><label>code client</label></td>
  					<td><input type="text" name="_codeclient" class="_input" maxlength="5" value="<?php echo ($code_client);?>" maxlength="10"/></td>
  				</tr>
  				<tr>
  					<td><label>Société</label></td>
  					<td><input type="text" name="_societe" value="<?php echo ($societe);?>" maxlength="40" class="_input"/></td>
  					<td><label>Contact</label></td>
  					<td><input type="text" name="_contact" value="<?php echo ($Contact);?>"  maxlength="30" class="_input"/></td>
  				</tr>
  				<tr>
  					<td><label>Adresse</label>
						</td><td><input type="text" name="_adresse" value="<?php echo ($adresse);?>" maxlength="60" class="_input" /></td>
  					<td><label>Fonction</label></td>
  					<td><input type="text" name="_fonction" value="<?php echo ($fonction);?>" maxlength="30" class="_input"/></td>
  				</tr>
  				<tr>
  					<td><label>Ville</label></td>
  					<td><input type="text" name="_ville" value="<?php echo ($ville);?>" maxlength="15" class="_input"/></td>
  					<td><label>Région</label></td>
  					<td><input type="text" name="_region" value="<?php echo ($region);?>" maxlength="15" class="_input"/></td>
  				</tr>
  				<tr>
  					<td><label>Code postal</label></td>
  					<td><input type="text" name="_codepostal"  value="<?php echo ($code_postal);?>" maxlength="10" class="_input"/></td>
  					<td><label>Pays</label></td>
  					<td><input type="text" name="_pays" value="<?php echo ($pays);?>" maxlength="15" class="_input"/></td>
  				</tr>
  				<tr>
  					<td><label>Téléphone</label></td>
  					<td><input type="text" name="_telephone" value="<?php echo ($tel);?>" maxlength="24" class="_input"/></td>
  					<td><label>Fax</label></td>
  					<td><input type="text" name="_fax" value="<?php echo ($fax);?>" maxlength="24" class="_input"/></td>
  				</tr>
  				<tr>
  					<td></td>
						<td><input type="submit" value="ajouter" name="insert" onclick="verifier();" /></td><td></td>
						<td><input type="submit" value="rechercher" name="rechercher"  onclick="verifier();" /></td>
					</tr>
					<tr>
  					<td></td>
						<td><input type="submit" value="modifier" name="update" onclick="verifier();" /></td><td></td>
						<td><input type="submit" value="supprimer" name="delete" onclick="verifier();" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="reset" value="vider" name="vider" onclick="" /></td>
					</tr>
				</table>
  </form>
</div>
</div>

<script src="js/script.js"></script>
</body>
</html>
