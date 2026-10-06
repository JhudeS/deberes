<?php
/*
Exercici 20 — Cas integrador: entrades de cinema
Calcul del subtotal, el descompte i el total final.
*/

$preuEntrada = 8;
$nombreEntrades = 3;
$esDiaEspectador = true;
define("DESCOMPTE_ESPECTADOR", 0.20);

$subtotal = $preuEntrada * $nombreEntrades;
$descompte = $subtotal * DESCOMPTE_ESPECTADOR * $esDiaEspectador;
$total = $subtotal - $descompte;

echo "Subtotal: " . $subtotal . " €<br>";
echo "Descompte: " . $descompte . " €<br>";
echo "Total final: " . $total . " €<br>";
?>
