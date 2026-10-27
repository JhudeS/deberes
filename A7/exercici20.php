<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 20</title>
</head>
<body>
<?php
$usuari1 = "Marta";
$usuari2 = "marta";

echo "Resultat amb strcmp(): " . strcmp($usuari1, $usuari2) . "<br>";
echo "Resultat amb strcasecmp(): " . strcasecmp($usuari1, $usuari2);
?>
</body>
</html>
