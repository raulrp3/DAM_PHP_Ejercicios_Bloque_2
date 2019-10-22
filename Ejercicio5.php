<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        $array = [1 => 'Uno', 3 => 'Tres', 5 => 'Cinco', 7 => 'Siete', 0 => 'Cero'];
        echo max(array_keys($array));
    ?>
</body>
</html>