<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 7</title>
</head>
<body>
    <?php
    //Exercici 7
    $n1 = 12;
    $n2 = 45;
    $n3 = 7;
    $n4 = 31;
    $n5 = 19;

    $numeros = [$n1, $n2, $n3, $n4, $n5];
    $mesGran = $numeros[0];

    foreach ($numeros as $numero) {
        if ($numero > $mesGran) {
            $mesGran = $numero;
        }
    }

    echo "El numero mes gran es: $mesGran";
    ?>
</body>
</html>
