<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 6</title>
</head>
<body>

    <?php
    
    function valoraNota($nota): int|string
    {
        if ($nota >= 5) {
            return (int) $nota;
        }

        return "Suspès";
    }

    echo valoraNota(7) . "<br>";
    echo valoraNota(4);

        ?>

</body>
</html>