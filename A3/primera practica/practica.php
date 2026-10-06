<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$productes_php = [
    ['nom' => 'Cafè', 'preu' => 1.50],
    ['nom' => 'Penne', 'preu' => 1.20],
    ['nom' => 'Pa', 'preu' => 2.00],
];
?>

<!--
Nom: fidel elvira
Descripció: Aquesta pàgina mostra els exercicis de pràctica de PHP.
-->

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>
</head>
<body>
    <h1>El ticket de firulingo</h1>

/*
Declara les variables següents: $article (string, el nom d'un producte), $preuUnitat (float),
$unitats (integer, quantes unitats es compren), $client (string, el nom del client) i $estocDisponible (integer,
quantes unitats queden en estoc abans de la compra). Mostra un primer bloc amb un < que digui "Comanda de [client]",
inserint la variable directament dins cometes dobles.
*/

<?php

$article = "Cafè";
$preuUnitat = 1.50;
$unitats = 3;
$client = "Fidel";
$estocDisponible = 10;

echo "<h2>Comanda de " . $client . "</h2>";
echo "<p>Article: " . $article . "</p>";
echo "<p>Preu unitat: " . $preuUnitat . " €</p>";
echo "<p>Unitats: " . $unitats . "</p>";
echo "<p>Estoc disponible: " . $estocDisponible . " unitats</p>";

/*
Mostra una línia amb el detall de l'article fent servir concatenació amb el punt (.): "Article: [article] — Preu unitat: [preuUnitat] € — Unitats: [unitats]". 
Defineix una constant IVA amb el valor 0.21. Calcula una variable $subtotal (preuUnitat × unitats) i una variable $totalAmbIva (subtotal + subtotal × IVA) — fixa't bé en aquests dos noms de variable, perquè els tornaràs a fer servir a la Part 5. 
Mostra tots dos valors amb un text descriptiu.
*/

const IVA = 0.21;
$subtotal = $preuUnitat * $unitats;     
$totalAmbIva = $subtotal + ($subtotal * IVA);

echo "<p>Article: " . $article . " — Preu unitat: " . $preuUnitat . " € — Unitats: " . $unitats . "</p>";
echo "<p>Subtotal: " . $subtotal . " €</p>";
echo "<p>Total amb IVA: " . $totalAmbIva . " €</p>";

/*
Utilitzant un operador de comparació, calcula si $unitats és menor o igual que $estocDisponible i guarda el resultat en una variable $hiHaEstoc. 
Mostra el valor de $hiHaEstoc amb un echo (recorda: PHP mostra "1" si és cert, i res si és fals — afegeix un comentari explicant-ho). 
Independentment del resultat, actualitza $estocDisponible restant-hi les unitats comprades fent servir l'operador -=, i mostra l'estoc abans i després de la resta.
*/

$hiHaEstoc = $unitats <= $estocDisponible; // Això serà cert (1) si hi ha prou estoc, fals (res) si no n'hi ha prou
echo "<p>Hi ha estoc suficient? " . ($hiHaEstoc ? "Sí" : "No") . "</p>";
echo "<p>Estoc abans de la compra: " . $estocDisponible . " unitats</p>";
$estocDisponible -= $unitats; 
echo "<p>Estoc després de la compra: " . $estocDisponible . " unitats</p>";

/*
Declara una variable booleana $esSoci. Defineix una constant DESCOMPTE_SOCI amb el valor 0.10. 
Calcula una variable $compleixCondicions amb el resultat de $esSoci && ($totalAmbIva > 50). 
Calcula l'import del descompte multiplicant el total amb IVA per DESCOMPTE_SOCI i per $compleixCondicions (per exemple: $importDescompte = $totalAmbIva * DESCOMPTE_SOCI * $compleixCondicions;).
Fixa't que, com que un booleà val 1 (cert) o 0 (fals) en una operació aritmètica, aquest càlcul "activa" o "desactiva" el descompte sense necessitat de cap condició explícita. Resta l'import del descompte al total i mostra el total final.
*/
$esSoci = true; // Per exemple, suposem que el client és soci
const DESCOMPTE_SOCI = 0.10;
$compleixCondicions = $esSoci && ($totalAmbIva > 50);
$importDescompte = $totalAmbIva * DESCOMPTE_SOCI * $compleixCondicions;
$totalFinal = $totalAmbIva - $importDescompte;

echo "<p>Import del descompte: " . $importDescompte . " €</p>";
echo "<p>Total final: " . $totalFinal . " €</p>";

/*
Afegeix un comentari d'una sola línia (// o #) abans del tancament de la pàgina explicant,
//  amb les teves paraules, quina part del codi t'ha costat més de fer i per què. Tanca correctament 
// les etiquetes </body></html>.

// no m'ha costat gaire pero es entretingut aprendre php
*/

?>



</body>
</html>