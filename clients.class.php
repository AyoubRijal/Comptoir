<?php
/**
 * la class de clients contient des methodes appeler lors de la page clinet.php
 * AYOub RIJAL / Soukaina Rhal
 *//**
  *
  */
class Clients extends Connecte
{
  public  $codeClient;
  public  $societe;
  public  $contact;
  public  $fonction;
  public  $adresse;
  public  $ville;
  public  $region;
  public  $codePostal;
  public  $pays;
  public  $telephone;
  public  $fax;
  function conneter()
    {
      parent::Connecter();
    }
    public function __construct()
      {
        $codeClient="";
        $societe="";
        $contact="";
        $fonction="";
        $adresse="";
        $ville="";
        $region="";
        $codePostal="";
        $pays="";
        $telephone="";
        $fax="";
      }
      public function __getClient(){
        $data =array();
        $data[0]=$codeClient;
        $data[1]=$societe;
        $data[2]=$contact;
        $data[3]=$fonction;
        $data[4]=$adresse;
        $data[5]=$ville;
        $data[6]=$region;
        $data[7]=$codePostal;
        $data[8]=$pays;
        $data[9]=$telephone;
        $data[10]=$fax;
        return $data;
      }
    public function setchamps($codeClient,$societe,$contact,$fonction,$adresse,$ville,$region,$codePostal,$pays,$telephone,$fax){
        $this->$codeClient=$codeClient;
        $this->$societe=$societe;
        $this->$contact=$contact;
        $this->$fonction=$fonction;
        $this->$adresse=$adresse;
        $this->$ville=$ville;
        $this->$region=$region;
        $this->$codePostal=$codePostal;
        $this->$pays=$pays;
        $this->$telephone=$telephone;
        $this->$fax=$fax;
      }
  /*
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
*/
 //connect to mysql database
/*
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
       }  */
       //rechercher


          public function recherche($code)
          {
             $resultat = $GLOBALS['bdd']->query("SELECT * FROM clients where Code_client = '$code' ");
             $data =array();
             while($rows=$resultat->fetch())
             {
               $data['Code_client']=$rows['Code_client'];
               $data['Societe']=$rows['Societe'];
               $data['Contact']=$rows['Contact'];
               $data['Fonction']=$rows['Fonction'];
               $data['Adresse']= $rows['Adresse'];
               $data['Ville']=$rows['Ville'];
               $data['Region']=$rows['Region'];
               $data['Code_postal']=$rows['Code_postal'];
               $data['Pays']=$rows['Pays'];
               $data['Telephone']=$rows['Telephone'];
               $data['Fax']=$rows['Fax'];
             }
             return $data;
          }
          /*
             while ($rows = $resultat->fetch())
             {
               $v1 = $rows['Code_client'];
               $v2 = $rows['Societe'];
               $v3 = $rows['Contact'];
               $v4 = $rows['Adresse'];
               $v5 = $rows['Fonction'];
               $v6 = $rows['Ville'];
               $v7 = $rows['Region'];
               $v8 = $rows['Pays'];
               $v9 = $rows['Code_postal'];
               $v10 = $rows['Telephone'];
               $v11 = $rows['Fax'];
             }
              $this->setchamps($v1, $v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9,$v10,$v11);
              $this->__getClient();


          */
        }

          /*
       $requette ="SELECT * FROM clients WHERE `Code_client` =". codeClient;
       $resultat_de_Recherche = $bdd->query($requette);
       $count = $resultat_de_Recherche->rowCount();
       if($resultat_de_Recherche)
       {
            if($count != 0)
            {


            }else{

              echo ("erreur resultat ");
            }

 }

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
*/
























?>
