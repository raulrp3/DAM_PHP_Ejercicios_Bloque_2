<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
        $url = 'https://www.mitienda.com/product-category/iphone?orderby=popularity';
        preg_match('#\/[a-zA-z0-9]*\?#', $url, $matches);
        if (count($matches) != 0){
            echo $matches[0];
        }
    ?>
</body>
</html>