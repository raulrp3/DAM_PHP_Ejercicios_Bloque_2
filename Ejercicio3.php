<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $students = ['Francisco', 'Juan', 'Raúl', 'Marcos', 'Verónica', 'Jesús'];
        echo '<ul><li>'.implode('</li><li>', $students).'</li></ul>';
    ?>
</body>
</html>