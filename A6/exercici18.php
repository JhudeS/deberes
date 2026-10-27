<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 18</title>
</head>
<body>
<?php
$numeros = [14, 3, 27, 9, 42, 18];
$mesGran = $numeros[0];

foreach ($numeros as $numero) {
    if ($numero > $mesGran) {
        $mesGran = $numero;
    }
}

echo "El valor més gran és: $mesGran";
?>
</body>
</html>
