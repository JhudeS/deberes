<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 8</title>
</head>
<body>
    <?php
    $nomEmpresa = "Deures PHP";

    function mostraCapcalera()
    {
        echo "Benvingut a " . $GLOBALS["nomEmpresa"];
    }

    // $GLOBALS permet accedir al valor global sense declarar-lo amb global dins la funció.
    mostraCapcalera();
    ?>
</body>
</html>
