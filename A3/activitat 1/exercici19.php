<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
/*
Exercici 19 — El truc booleà en un càlcul real
Si la compra supera el llindar, l'enviament és gratuït.
*/

$totalCompra = 40;
define("LLINDAR_ENVIAMENT_GRATIS", 30);
$teEnviamentGratis = $totalCompra >= LLINDAR_ENVIAMENT_GRATIS;
$costEnviament = 4.99 * (1 - $teEnviamentGratis);

echo "Compra: " . $totalCompra . " €<br>";

echo "Enviament: " . $costEnviament . " €<br>";

echo "Estoc disponible: " . $estocDisponible . " unitats<br>";  
echo "Té enviament gratuït: " . ($teEnviamentGratis ? "Sí" : "No") . "<br>";
?>
