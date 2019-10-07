<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        $string = 'primera parte de la cadena: esta cadena pertenece, al ejercicio numero 2. esta es la | parte final :)';
        $string = str_replace([',','.','|',':'], '@', $string);
        var_dump(explode('@', $string));
    ?>
</body>
</html>