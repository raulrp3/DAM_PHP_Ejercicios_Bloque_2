<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
        $array = ['Hola mundo', 'Dando clase de php', 'Hoy es lunes'];
        var_dump(array_map('strtoupper', $array));
    ?>
</body>
</html>