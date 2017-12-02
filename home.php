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
	<title><?php echo "My first page php" ?></title>
</head>
<body>
 
    <form action="Rquest.php" method="POST" enctype="multipart/form-data" >
        <select name="table"  class="col-md-6">
            <?php
            $reponse = $bdd->query('SHOW TABLES');
		      while($donnees = $reponse->fetch())
		      { 
	 	     ?>
	 	         <option <?php "value=". $donnees[0]; ?> ><?php echo $donnees[0]; ?></option>
  		    <?php	
	           }
			 $reponse->closeCursor();
  		    ?>
  	 </select> 
    <input type="file" name="fileExp" id="">
    <input type="submit" value=" Importer ">
    </form>
    <form action="" method="get" id="form1">
      <input name="button" type="button" onclick="setnull();" value="Afficher CLients Commander 1997" />
    </form>
    <!-- Il faut une class  client -->
    <table>
                <tr>
                    <th>Code client</th>
                    <th>Societe</th>
                    <th>Ville</th>
                    <th>Pays</th>
                </tr>
    <?php
        if($_SERVER['REQUEST_METHOD']=='GET'){
            echo "<br> Clicquer ! ";
        }
        if($_SERVER['REQUEST_METHOD']=='POST'){
        $s = $bdd->query("SELECT DISTINCT clients.Code_client,clients.Societe, clients.Ville, Clients.Pays FROM clients RIGHT JOIN commandes ON clients.Code_client=Commandes.Code_client WHERE Commandes.Date_commande Between '1997-1-1' And '1997-12-31'");
        $ss = $s->rowCount();
        if($ss > 0)
        {
            while($row = $s->fetch())
            {
        ?>
               <tr>
                    <th><?php echo $row[0];?></th>
                    <th><?php echo $row[1];?></th>
                    <th><?php echo $row[2];?></th>
                    <th><?php echo $row[3];?></th>
                </tr>
    <?php
            }
        }
    }
    ?>
    </table>
    
<script type="text/javascript">
  function setnull(){
    var form = document.getElementById('form1');
      var method = form.method;
      if(method =="get"){
          form.method ="post";
      }
      if(method == "post"){
        form.method = "GET";
          }
    form.submit();
    alert(form.method);
  }
</script>

</body>
</html> 