<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 11</title>
</head>
<body>
    <?php
        $string = 'Escuela Estech, Linares';
        $position = strlen('Escuela');
        $newString = substr_replace($string, ' de Tecnologías', $position, 0);
        echo $newString;
    ?>
</body>
</html>