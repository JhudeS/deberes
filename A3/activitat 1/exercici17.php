<?php
/*
Exercici 17 — Combinant diverses constants
Sumem el preu base i, si és festiu, afegim el recàrrec.
*/

define("PREU_BASE", 15);
define("RECARREC_FESTIU", 3);

$esFestiu = true;
$preuFinal = PREU_BASE + (RECARREC_FESTIU * $esFestiu);

echo "Preu final: " . $preuFinal . " €<br>";
?>
