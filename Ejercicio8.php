<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php 
        function printTemperatures($array){
            for($i = 0; $i < 5; $i++){
                echo $i.': '.$array[$i].'</br>';
            }
        }
    ?>
    <?php
        $temperatures = [78,60,62,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73];
        $media = 0;
        echo 'Temperaturas máximas.</br>';
        rsort($temperatures);
        printTemperatures($temperatures);
        echo 'Temperaturas mínimas.</br>';
        sort($temperatures);
        printTemperatures($temperatures);
        foreach($temperatures as $temperature){
            $media += $temperature;
        }
        echo 'Media: '.($media / count($temperatures));
    ?>
</body>
</html>