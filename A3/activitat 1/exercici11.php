<?php
/*
Exercici 11 — Conversió de tipus
Convertim un string a integer amb casting.
*/

$textNumeric = "25";
$numeroEnter = (int) $textNumeric;

echo "Text: " . $textNumeric . " (" . gettype($textNumeric) . ")<br>";
echo "Enter: " . $numeroEnter . " (" . gettype($numeroEnter) . ")<br>";
?>
