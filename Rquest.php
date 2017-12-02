<?php
header('Content-type: text/html; charset=utf-8');
include_once('connecte.class.php');
$pdoOptions[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES utf8';
        $cnx = new Connecte;
        $cnx->Connecter();
if($_SERVER['REQUEST_METHOD']=='POST'){
    // echo $_FILES['fichier']['type']; //retourner le type de fichier
 // echo $table= $_POST['table'];  Recupèrer la table 
 // substr(  strrchr($_FILES['fichier']['type'], '/')  ,1) ;  retoure apres le /
    $extension = array('vnd.ms-excel');
    $extension_charge = strtolower(substr(strrchr($_FILES['fileExp']['type'], '/') ,1));
    echo $extension_charge;
    if ( $_FILES['fileExp']['error'] > 0 && !in_array($extension_charge,$extension))
	{
	 	echo $erreur = "Erreur lors du transfert </br> n'oublie pas format CSV ";
	}
    else{
    $file =$_FILES['fileExp']['tmp_name'];
    
    $handle = fopen($file, "r");
    $v=0;
    while(($fileop = fgetcsv($handle,10000,";")) !== false){
       if($_POST['table'] == 'clients'){
            $req = $bdd->prepare("INSERT INTO `clients` VALUES (:v0,:v1,:v2,:v3,:v4,:v5,:v6,:v7,:v8,:v9,:v10)");
            $req->bindparam(':v0',$fileop[0]);
            $req->bindparam(':v1',$fileop[1]);
            $req->bindparam(':v2',$fileop[2]);
            $req->bindparam(':v3',$fileop[3]);
            $req->bindparam(':v4',$fileop[4]);
            $req->bindparam(':v5',$fileop[5]);
            $req->bindparam(':v6',$fileop[6]);
            $req->bindparam(':v7',$fileop[7]);
            $req->bindparam(':v8',$fileop[8]);
            $req->bindparam(':v9',$fileop[9]);
            $req->bindparam(':v10',$fileop[10]); 
            $req->execute();
            $msg="Bien inserer dans la table CLIENTS";
        }
        elseif($_POST['table'] == 'categories'){
            $req = $bdd->prepare("INSERT INTO `categories` VALUES (:v0,:v1,:v2,:v3)");
            $req->bindparam(':v0',$fileop[0]);
            $req->bindparam(':v1',$fileop[1]);
            $req->bindparam(':v2',$fileop[2]);
            $req->bindparam(':v3',$fileop[3]);
            $req->execute();
             $msg="Bien inserer dans la table CATEGORIES";
        }
        elseif($_POST['table'] == 'commandes'){
            $req = $bdd->prepare("INSERT INTO `commandes` VALUES (:v0,:v1,:v2,:v3,:v4,:v5,:v6,:v7,:v8,:v9,:v10,:v11,:v12,v13)");
            $req->bindparam(':v0',$fileop[0]);
            $req->bindparam(':v1',$fileop[1]);
            $req->bindparam(':v2',$fileop[2]);
            $req->bindparam(':v3',$fileop[3]);
            $req->bindparam(':v4',$fileop[4]);
            $req->bindparam(':v5',$fileop[5]);
            $req->bindparam(':v6',$fileop[6]);
            $req->bindparam(':v7',$fileop[7]);
            $req->bindparam(':v8',$fileop[8]);
            $req->bindparam(':v9',$fileop[9]);
            $req->bindparam(':v10',$fileop[10]);
            $req->bindparam(':v11',$fileop[11]);
            $req->bindparam(':v12',$fileop[12]); 
            $req->bindparam(':v13',$fileop[13]);
            $req->execute();
             $msg="Bien inserer dans la table COMMANDES ";
        }
        elseif($_POST['table'] == 'detailscommandes'){
            $req = $bdd->prepare("INSERT INTO `detailscommandes` VALUES (:v0,:v1,:v2,:v3,:v4)");
            $req->bindparam(':v0',$fileop[0]);
            $req->bindparam(':v1',$fileop[1]);
            $req->bindparam(':v2',$fileop[2]);
            $req->bindparam(':v3',$fileop[3]);
            $req->bindparam(':v4',$fileop[4]);
            $req->execute();
             $msg="Bien inserer dans la table DTAILSCOMMADES";
        }
        elseif($_POST['table'] == 'employes'){
            $req = $bdd->prepare("INSERT INTO `employes` VALUES (:v0,:v1,:v2,:v3,:v4,:v5,:v6,:v7,:v8,:v9,:v10,:v11,:v12,:v13,:v14,:v15,:v16)");
            $req->bindparam(':v0',$fileop[0]);
            $req->bindparam(':v1',$fileop[1]);
            $req->bindparam(':v2',$fileop[2]);
            $req->bindparam(':v3',$fileop[3]);
            $req->bindparam(':v4',$fileop[4]);
            $req->bindparam(':v5',$fileop[5]);
            $req->bindparam(':v6',$fileop[6]);
            $req->bindparam(':v7',$fileop[7]);
            $req->bindparam(':v8',$fileop[8]);
            $req->bindparam(':v9',$fileop[9]);
            $req->bindparam(':v10',$fileop[10]);
            $req->bindparam(':v11',$fileop[11]); 
            $req->bindparam(':v12',$fileop[12]); 
            $req->bindparam(':v13',$fileop[13]); 
            $req->bindparam(':v14',$fileop[14]); 
            $req->bindparam(':v15',$fileop[15]);
            $req->bindparam(':v16',$fileop[16]); 
            $req->execute();
             $msg="Bien inserer dans la table EMPLOYES ";
        }
        elseif($_POST['table'] == 'fournisseurs'){
            $req = $bdd->prepare("INSERT INTO `fournisseurs` VALUES (:v0,:v1,:v2,:v3,:v4,:v5,:v6,:v7,:v8,:v9,:v10,:v11)");
            $req->bindparam(':v0',$fileop[0]);
            $req->bindparam(':v1',$fileop[1]);
            $req->bindparam(':v2',$fileop[2]);
            $req->bindparam(':v3',$fileop[3]);
            $req->bindparam(':v4',$fileop[4]);
            $req->bindparam(':v5',$fileop[5]);
            $req->bindparam(':v6',$fileop[6]);
            $req->bindparam(':v7',$fileop[7]);
            $req->bindparam(':v8',$fileop[8]);
            $req->bindparam(':v9',$fileop[9]);
            $req->bindparam(':v10',$fileop[10]);
            $req->bindparam(':v10',$fileop[11]);  
            $req->execute();
             $msg="Bien inserer dans la table FOURNISSEURS ";
        }
        elseif($_POST['table'] == 'messagers'){
            $req = $bdd->prepare("INSERT INTO `messagers` VALUES (:v0,:v1,:v2)");
            $req->bindparam(':v0',$fileop[0]);
            $req->bindparam(':v1',$fileop[1]);
            $req->bindparam(':v2',$fileop[2]);
            $req->execute();
             $msg="Bien inserer dans la table MESSAGERS ";
        }
        elseif($_POST['table'] == 'produits'){
             $req = $bdd->prepare("INSERT INTO `produits` VALUES(:v0,:v1,:v2,:v3,:v4,:v5,:v6,:v7,:v8,:v9)");
            $req->bindparam(':v0',$fileop[0]);
            $req->bindparam(':v1',$fileop[1]);
            $req->bindparam(':v2',$fileop[2]);
            $req->bindparam(':v3',$fileop[3]);
            $req->bindparam(':v4',$fileop[4]);
            $req->bindparam(':v5',$fileop[5]);
            $req->bindparam(':v6',$fileop[6]);
            $req->bindparam(':v7',$fileop[7]);
            $req->bindparam(':v8',$fileop[8]);
            $req->bindparam(':v9',$fileop[9]);
            $req->execute();
            $msg="Bien inserer dans la table PRODUITS";
        }
        }
        echo $msg;
      fclose($file);
    }
// echo $_FILES['fichier']['error'];  //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.   
  
}
 else{
    echo "<h1>This Page Is Not Accesisble directly</h1>";
}
