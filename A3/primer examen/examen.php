<?php
// 1
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    
</head>
<body>
<?php
/*
    Examen de programació el meu nom es fidel elvira y aquest treball individual sense conexio a intenet s'anomena sortida escolar 
    calcula el cost per alumne tenin en compte el nombre d'inscrit un psossible descompte per grup i esi ja s'ha arribat al presupost maxim disponible
*/

// 2
$nomSortida = "Visita a el museo";
$preuPerAlumne = 2.0;
$pressupostMaxim = 20.0;
$dipositJaPagat = 10.0;
$nombreAlumnes = 30; 
echo "<h1>Sortida escolar: " . $nomSortida . "</h1>";
 // 3 
define('IVA_ACTIVITATS', 0.10);

$totalSenseIva = $preuPerAlumne * $nombreAlumnes;
$totalAmbIva = $totalSenseIva + ($totalSenseIva * IVA_ACTIVITATS);

echo "<h1> cost sense iva = : " . $totalSenseIva . " €</h1>";
echo "<h1> cost amb iva = : " . $totalAmbIva . " €</h1>";

// Exercici 4
define('DESCOMPTE_GRUP', 0.05);

$esGrupNombros = $nombreAlumnes >= 25;

$totalambDescompte = $totalAmbIva;
$totalambDescompte -= $esGrupNombros = ($totalAmbIva * DESCOMPTE_GRUP); 
echo "<h1> el total amb descompte aplicat seria de  = : " . $totalambDescompte . " €</h1>";
//Exercici 5
$pendentDePagament =   $totalambDescompte;
$pendentDePagament -= $dipositJaPagat;
echo "<h1> pendent de pagament = : " . $pendentDePagament . " €</h1>";

// Exercici 6

$superaPressupostMaxim = $pendentDePagament > $pressupostMaxim;

echo "<h1> Supera el pressupost màxim?: " . $superaPressupostMaxim . " el resultat es llegeix aixi: 1 significa que sí, 0 que no</h1>";

// Exercici 7

$InscritsActuals = 0;
++$InscritsActuals;
echo "<h1> Inscrits actuals = : " . $InscritsActuals . " </h1>";
++$InscritsActuals;
echo "<h1> Inscrits actuals = : " . $InscritsActuals . " </h1>";
++$InscritsActuals;
echo "<h1> Inscrits actuals = : " . $InscritsActuals . " </h1>";


// la part que mes m'ha costat ha estat la del descompte per grup per utilitzar operadors logics sense if 
?>

</body>
</html>