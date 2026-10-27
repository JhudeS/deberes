<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 12</title>
</head>
<body>
    <?php
    $codi = <<<'CODI'
<?php
$nom = "Anònim";
echo "Hola $nom";
?>
CODI;

    echo "<pre>" . htmlspecialchars($codi) . "</pre>";
    ?>
</body>
</html>
