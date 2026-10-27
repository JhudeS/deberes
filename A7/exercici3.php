<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 3 </title>
</head>
<body>
    

<?php
 
 $valor = 5;

 function duplica(&$num){
    $num = $num * 2;
    return $num;
 }

 duplica($valor);

 echo "$valor";

?>

</body>
</html>