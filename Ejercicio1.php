<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        $array = [1, 2, 3, 6, 7, 8];
        $range = range(1, 8);
        $diff = array_diff($range, $array);
        var_dump($diff);
    ?>
</body>
</html>