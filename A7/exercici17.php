<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 17</title>
</head>
<body>
<?php
$frase = "La contrasenya és necessària per accedir.";
$fraseCensurada = str_replace("contrasenya", "*****", $frase);

echo $fraseCensurada;
?>
</body>
</html>
