<?php
/*
Exercici 9 — Accés permès?
Mostra el resultat lògic i el seu valor numèric.
*/

$esMajorEdat = true;
$tePermis = true;

$acces = $esMajorEdat && $tePermis;
echo "Accés lògic: " . $acces . "<br>";
echo "Accés numèric: " . ($acces * 1) . "<br>";
?>
