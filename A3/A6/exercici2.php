<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2 fors i whiles</title>
</head>
<body>
    <?php
    //Exercici 2

    $suma = 0;
    for($i = 1; $i <= 50; $i++){

    if($i % 3 == 0){

        $suma += $i;

    }}

    echo "$suma";

    ?>
</body>
</html>