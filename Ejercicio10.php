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
        var_dump(preg_split('/\/[a-zA-Z]+\?/', $url));
    ?>
</body>
</html>