<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 11</title>
</head>
<body>
    <?php
    //Exercici 11
    $numero = 100;
    $divisions = 0;

    while ($numero > 1) {
        echo "$numero<br>";
        $numero = floor($numero / 2);
        $divisions++;
    }

    echo "1<br>";
    echo "Han calgut $divisions divisions.";
    ?>
</body>
</html>
