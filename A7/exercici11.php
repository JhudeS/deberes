<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 11</title>
</head>
<body>
    <?php
    $nom = "Teclat mecànic";
    $preu = 59.99;
    $descripcio = "Teclat amb retroil·luminació RGB";

    $fitxa = <<<FITXA
    <h2>$nom</h2>
    <p>Preu: $preu €</p>
    <p>$descripcio</p>
    FITXA;

    echo $fitxa;
    ?>
</body>
</html>
