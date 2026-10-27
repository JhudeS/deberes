<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 20</title>
</head>
<body>
<?php
$producte = [
    'nom' => 'Motxilla',
    'preu' => 29.99,
    'estoc' => 12
];

echo "<h1>Fitxa del producte</h1>";
foreach ($producte as $clau => $valor) {
    if ($clau === 'preu') {
        $valor = number_format($valor, 2, ',', '.') . " €";
    }

    echo ucfirst($clau) . ": $valor<br>";
}
?>
</body>
</html>
