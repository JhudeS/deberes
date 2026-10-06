<?php
/*
Exercici 10 — Quin tipus és cada variable?
Mostra el tipus amb gettype().
*/

$nom = "Fidel";
$edat = 12;
$preu = 19.99;
$actiu = true;

echo "Nom: " . gettype($nom) . "<br>";
echo "Edat: " . gettype($edat) . "<br>";
echo "Preu: " . gettype($preu) . "<br>";
echo "Actiu: " . gettype($actiu) . "<br>";
?>
