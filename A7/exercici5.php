<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 5</title>
</head>
<body>
    <?php

    function buscarAlum($id){
        if ($id == 1){
            return "Federico garcia polka";
        }else{
            return null;
        }
    }

    echo buscarAlum("2");
    echo "despues de el 2 <br>";
    echo buscarAlum("1");
    ?>
</body>
</html>