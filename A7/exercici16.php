<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 16</title>
</head>
<body>
<?php
$text = "   Hola   ";
$textNet = trim($text);

echo "Longitud abans: " . strlen($text) . "<br>";
echo "Longitud després de trim(): " . strlen($textNet);
?>
</body>
</html>
