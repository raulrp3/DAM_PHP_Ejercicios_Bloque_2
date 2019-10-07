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
        $url = explode('/', $url);
        echo $url[count($url) - 1];
    ?>
</body>
</html>