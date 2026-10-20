<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 14</title>
</head>
<body>
<?php
$nota1 = 7.5;
$nota2 = 6;
$nota3 = 8.25;
$nota4 = 5.75;

$notes = [$nota1, $nota2, $nota3, $nota4];
$suma = 0;

foreach ($notes as $nota) {
    $suma += $nota;
}

$mitjana = $suma / 4;
echo "La mitjana de les notes és: " . $mitjana;
?>
</body>
</html>