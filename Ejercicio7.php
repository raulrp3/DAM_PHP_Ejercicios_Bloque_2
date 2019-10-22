<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
        $array = ['Hola mundo', 'Dando clase de php', 5, 'Hoy es lunes'];
        $result = 'VÁLIDO';
        foreach($array as $item){
            if (!is_string($item)){
                $result = 'NO VÁLIDO';
                break;
            }
        }
        echo $result;
    ?>
</body>
</html>