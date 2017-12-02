<?php

//$file = @fopen("moha.php" , "r") or die("Fichier ntrouvable");

 // include("home.php");  appeler a une autre  page
// =============FOR LOOP================
/* 

for ( $i=0 ; $i<10 ; $i++ )
{
	echo " <div style='background-color:#f00;padding:20px;width:200px;height:100px;margin-top:5px;margin-right:2px;float:left'>Welcome ayoub </div>";
}
$lan = array("Html" ,"CSS3" ,"Jquery","PhP5" , "JAVA" , "BOOTSTRAP","JAVASCRIPT");
count($lan);
echo "<ul>";
		for ($i=0; $i <count($lan) ; $i++) { 
			echo "<li>" . $lan[$i] ."</li>";
		}
echo "</ul>";

 */
/*=======================WHILE LOOP
	$i=1;
	while($i<=20): //  ( :  op )
	echo $i . "<br>";
	$i++;
	endwhile; //  op 
*///================= DO WHILE === 
/* ============= FOR EACH  (  array as value) // indexd arrays 
					(array as key => value) //associative arrays
*/ 
$countries = array("Morocco","Egypet","Algerie");
$count  = array(
		"Ma" => "Maroc",
		"EG" => "Egypet",
		"SU" => "Sudan",
	);
	foreach($count as $key => $value)
	{
		echo $value . " <br>" ;
		echo $key . " <br>";
	}
?>
<select>
	<?php
		for ($years=1900; $years<=2017  ; $years++) { 
			echo  "<option velue='$years'> $years </option>";
		}

	?>

</select>