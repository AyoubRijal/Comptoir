
<?php
	// variables
    include_once('connecte.class.php');
        $cnx = new Connecte;
        $cnx->Connecter();

?>

<?php

public function getData(){

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
$search_query="SELECT * FROM clients WHERE code_client ='$info[0]'";
$search_result=mysqli_query(cnx,$search_query);
if($search_result)
{
     if(mysqli_num_rows($search_result))
     {

          while ($rows=mysqli_fetch_array($search_result))
          {
            $code_client=$rows['_codeclient'];
            $societe=$rows['_societe'];
            $Contact=$rows['_contact'];
            $adresse=$rows['_adresse'];
            $fonction=$rows['_fonction'];
            $ville=$rows['_ville'];
            $region=$rows['_region'];
            $pays=$rows['_pays'];
            $code_postal=$rows['_codepostal'];
            $tel=$rows['_telephone'];
            $fax=$rows['_fax'];
          }else{

            echo "aucun data";
          }
     }else{

       echo "erreur resultat ";
     }


}



 }
















?>
