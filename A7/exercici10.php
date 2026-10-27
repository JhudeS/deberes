<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 10</title>
</head>
<body>
    <?php
    function generaParell($a, $b)
    {
        return [$a, $b];
    }

    $parell = generaParell("primer valor", "segon valor");

    foreach ($parell as $valor) {
        echo $valor . "<br>";
    }
    ?>
</body>
</html>
