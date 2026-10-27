<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edades</title>
</head>
<body>
    <?php


function esMajorEdat($edat){

if($edat >= 18){
    return true;
}else{
    return false;
}
}

$edad = 1;
$edad2 = 18;
$edad3 = 33;

echo esMajorEdat($edad) ? "true<br>" : "false <br>";
echo esMajorEdat($edad2) ? "true<br>" : "false<br>";
echo esMajorEdat($edad3) ? "true<br>" : "false<br>";

    ?>
</body>
</html>