<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 7</title>
</head>
<body>
    <?php
    function creaFitxa($nom = "Anònim", $edat = 18, $ciutat = "Desconeguda")
    {
        return "Hola " . $nom . " té " . $edat .
            " anys i la seva ciutat és " . $ciutat;
    }

    echo creaFitxa(ciutat: "Barcelona");
    ?>
</body>
</html>
