<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 17</title>
</head>
<body>
<?php
$preus = [12.50, 8.99, 25.75, 4.50, 19.95, 7.25];
$total = 0;

foreach ($preus as $preu) {
    $total += $preu;
}

echo "El total de la llista de preus és: " . number_format($total, 2, ',', '.') . " €";
?>
</body>
</html>
