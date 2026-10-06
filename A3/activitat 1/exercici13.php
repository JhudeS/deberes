<?php
/*
Exercici 13 — L'operador OR
Comprovem si una de les dues condicions és certa.
*/

$teEfectiu = false;
$teTargeta = true;

$resultat = $teEfectiu || $teTargeta;
echo "Resultat lògic: " . $resultat . "<br>";
echo "Resultat numèric: " . ($resultat * 1) . "<br>";
?>
