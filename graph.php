<?php // content="text/plain; charset=utf-8"
require_once ('src/jpgraph.php');
require_once ('src/jpgraph_bar.php');
/*
SELECT clients.Code_client , commandes.N°_commande FROM clients clients INNER JOIN commandes commandes on clients.Code_client = commandes.Code_client
*/
    try
		{
    $bdd = new PDO("mysql:host=localhost;dbname=comptoir;charset=utf8", 'root', '');
		}
		catch (PDOException $e)
		{
       		  echo 'Erreur : ' . $e->getMessage();
		}

    $rep = $bdd->query('SELECT  count(clients.Code_client) as c , commandes.N°_commande FROM clients clients INNER JOIN commandes commandes on clients.Code_client = commandes.Code_client');
    while($d = $rep->fetch()){
        $donnees[] = $d['c'];
        $label[] = $d['N°_commande'];
    }

// ** $datay=array(62,105,85,50); // faut changer les vlaurs la ! 


// Create the graph. These two calls are always required
$graph = new Graph(600,500,'auto');
$graph->SetScale("textlin");
$graph->xaxis->title->set("Voila");
$graph->xaxis->SetTickLabels($donnees);
$graph->yaxis->title->set("hmm");
//$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());
// set major and minor tick positions manually
// ** $graph->yaxis->SetTickPositions(array(0,30,60,90,120,150), array(15,45,75,105,135));
 // ** $graph->SetBox(false);
//$graph->ygrid->SetColor('gray');
 // ** $graph->ygrid->SetFill(false);
//** $graph->xaxis->SetTickLabels(array('A','B','C','D'));
// ** $graph->yaxis->HideLine(false);
// ** $graph->yaxis->HideTicks(false,false);

// Create the bar plots
$b1plot = new BarPlot($donnees);
$b1plot->SetFillColor("#4B0082");
//** $b1plot->SetColor("white");
// ** $b1plot->SetFillGradient("#4B0082","white",GRAD_LEFT_REFLECTION);
$b1plot->SetWidth(50);
// ...and add it to the graPH
$graph->Add($b1plot);
//* *$graph->title->Set("Les Top Commander ");

// Display the graph
$graph->Stroke();
?>