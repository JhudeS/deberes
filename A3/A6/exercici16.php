<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 16</title>
</head>
<body>
<?php
$numeros = [4, 7, 12, 15, 20, 23, 28, 31];
$parells = 0;

foreach ($numeros as $numero) {
    if ($numero % 2 === 0) {
        $parells++;
    }
}

echo "Hi ha $parells números parells.";
?>
</body>
</html>
