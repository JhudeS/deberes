<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 8</title>
</head>
<body>
    <?php
    //Exercici 8
    for ($taula = 2; $taula <= 5; $taula++) {
        echo "Taula del $taula<br>";

        for ($i = 1; $i <= 10; $i++) {
            echo "$taula x $i = " . ($taula * $i) . "<br>";
        }

        echo "<br>";
    }
    ?>
</body>
</html>
