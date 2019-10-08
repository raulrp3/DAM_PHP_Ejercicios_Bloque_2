<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 12</title>
</head>
<body>
    <?php 
        $url = 'https://www.dominio.com/descargas/archivo1.pdf';
        preg_match('#[a-z]{3,5}:#', $url, $scheme);
        preg_match('#www.[a-zA-z0-9]+.[a-z]{3}#', $url, $host);
        preg_match('#\/[a-zA-z0-9]+\/[a-zA-z0-9]+.[a-z]{3,4}#', $url, $path);
        if (!empty($scheme) && !empty($host) && !empty($path)){
            echo '<p>Esquema: '.$scheme[0].'</p>';
            echo '<p>Host: '.$host[0].'</p>';
            echo '<p>Path: '.$path[0].'</p>';
        }
    ?>
</body>
</html>