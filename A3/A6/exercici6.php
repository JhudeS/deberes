<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 6</title>
</head>
<body>

    <?php
    //Exercici 6
    $n1 = 8;
    $n2 = 15;
    $n3 = 23;
    $n4 = 0;
    $posicio = 1;

    while (${'n' . $posicio} != 0) {
        echo ${'n' . $posicio} . "<br>";
        $posicio++;
    }
    ?>

</body>
</html>