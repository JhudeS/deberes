<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 9</title>
</head>
<body>
    <?php
    function calculaTotal($preu, $unitats, $iva = 0.21)
    {
        return $preu * $unitats * (1 + $iva);
    }

    echo "Amb IVA indicat: " . calculaTotal(10, 2, 0.10) . " €<br>";
    echo "Amb IVA per defecte: " . calculaTotal(10, 2) . " €";
    ?>
</body>
</html>
