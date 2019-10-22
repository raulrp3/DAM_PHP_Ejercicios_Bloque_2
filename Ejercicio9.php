<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
        $url = 'www.dominio.com/htdocs/pagina.php';
        preg_match('#\/[a-zA-z0-9]*\.[a-z]{3,4}#', $url, $matches);
        if (!empty($matches)){
            $result = preg_replace('#\/#', '', $matches[0]);
            echo $result;
        }
    ?>
</body>
</html>