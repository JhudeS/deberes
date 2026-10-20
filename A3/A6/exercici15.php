<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 15</title>
</head>
<body>
<?php
$numero = 101;

while ($numero % 7 !== 0) {
    $numero++;
}

echo "El primer múltiple de 7 més gran que 100 és: $numero";
?>
</body>
</html>
