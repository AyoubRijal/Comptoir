<DOCTYPE HTML>
	<?php
		// variables
	   /* include_once('../connecte.class.php');
	        $connect = new Connecte;
	        $connect->Connecter();
*/
	?>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="comptoir";
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

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//connect to mysql database
try{
	$connect =mysqli_connect($servername,$username,$password,$dbname);
}catch(MySQLi_Sql_Exception $ex){
	echo("error in connecting");
}

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

         if(isset($_POST['rechercher']))
         {

        $info= getData();
        $search_query="SELECT * FROM clients WHERE `Code_client` ='$info[0]'";
        $search_result=mysqli_query(  $connect,$search_query);
        if($search_result)
        {
             if(mysqli_num_rows($search_result))
             {

                  while ($rows = mysqli_fetch_array($search_result))
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

                    echo ("aucun data");
                  }
             }else{

               echo ("erreur resultat ");
             }

}



//ajouter
if(isset($_POST['insert'])){
	$info = getData();
	$insert_query="INSERT INTO `clients`(`Code_client`,`Societe`,`Contact`,`Adresse`,`Fonction`,`Ville`,`Region`,`Pays`,`Code_postal`,`Telephone`,`Fax`) VALUES ('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]')";
	try{
		$insert_result=mysqli_query($connect,$insert_query);
		if($insert_result)
		{
			if(mysqli_affected_rows($connect)>0){
				echo("data inserted successfully");

			}else{
				echo("data are not inserted");
			}
		}
	}catch(Exception $ex){
		echo("error inserted".$ex->getMessage());
	}
}
//modifier
if(isset($_POST['update'])){
	$info = getData();
	$update_query="UPDATE clients SET Societe='$info[1]',Contact='$info[2]',Adresse='$info[3]',Fonction='$info[4]' ,Ville='$info[5]',Region='$info[6]',Pays='$info[7]',Code_postal='$info[8]',Telephone='$info[9]',Fax='$info[10]' WHERE Code_client = '$info[0]'";
	try{
		$update_result=mysqli_query($connect, $update_query);
		if($update_result){
			if(mysqli_affected_rows($connect)>0){
				echo("data updated");
			}else{
				echo("data not updated");
			}
		}
	}catch(Exception $ex){
		echo("error in update".$ex->getMessage());
	}
}
//delete
if(isset($_POST['delete'])){
	$info = getData();
	$delete_query = "DELETE FROM `clients` WHERE Code_client = '$info[0]'";
	try{
		$delete_result = mysqli_query($connect, $delete_query);
		if($delete_result){
			if(mysqli_affected_rows($connect)>0)
			{
				echo("data deleted");
			}else{
				echo("data not deleted");
			}
		}
	}catch(Exception $ex){
		echo("error in delete".$ex->getMessage());
	}
}
//vider
if(isset($_POST['vider'])){

	$_POST['_codeclient']='';
	$_POST['_societe']='';
	$_POST['_contact']='';
	$_POST['_adresse']='';
	$_POST['_fonction']='';
	$_POST['_ville']='';
	$_POST['_region']='';
	$_POST['_pays']='';
	$_POST['_codepostal']='';
	$_POST['_telephone']='';
	$_POST['_fax']='';

}
?>
<html>

<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="script.js"></script>

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
  <td><input type="text" name="_societe" value="<?php echo ($societe);?>" class="_input"/></td>
  <td><label>Contact</label></td>
  <td><input type="text" name="_contact" value="<?php echo ($Contact);?>"  class="_input"/></td>
  </tr>

  <tr>
  <td><label>Adresse</label></td><td><input type="text" name="_adresse" value="<?php echo ($adresse);?>" class="_input" /></td>
  <td><label>Fonction</label></td>
  <td><input type="text" name="_fonction" value="<?php echo ($fonction);?>" class="_input"/></td>
  </tr>
  <tr>
  <td><label>Ville</label></td>
  <td><input type="text" name="_ville" value="<?php echo ($ville);?>" class="_input"/></td>
  <td><label>Région</label></td>
  <td><input type="text" name="_region" value="<?php echo ($region);?>" class="_input"/></td>
  </tr>

  <tr>
  <td><label>Code postal</label></td>
  <td><input type="text" name="_codepostal"  value="<?php echo ($code_postal);?>"class="_input"/></td>
  <td><label>Pays</label></td>
  <td><input type="text" name="_pays" value="<?php echo ($pays);?>"class="_input"/></td>
  </tr>

  <tr>
  <td><label>Téléphone</label></td>
  <td><input type="text" name="_telephone" value="<?php echo ($tel);?>" class="_input"/></td>
  <td><label>Fax</label></td>
  <td><input type="text" name="_fax" value="<?php echo ($fax);?>" class="_input"/></td>
  </tr>




  <tr>
  <td></td><td><input type="submit" value="ajouter" name="insert" onclick="return verifier();" /></td><td></td>
	<td><input type="submit" value="rechercher" name="rechercher"  onclick="return verifier();" /></td>
</tr>
	<tr>
  <td></td><td><input type="submit" value="modifier" name="update" onclick="return verifier();" /></td><td></td>
	<td><input type="submit" value="supprimer" name="delete" onclick="return verifier();" /></td>

</tr>
<tr>
<td></td><td><input type="submit" value="vider" name="vider" onclick="return verifier();" /></td>
</tr></table>
  </form>
</div>
</div>





</body>









</html>
