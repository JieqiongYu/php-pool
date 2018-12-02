<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $array_sample = [343, 34, 323, 23, 54, 232, 453];
        echo max($array_sample);
        echo "<br>";
        echo min($array_sample);
        echo "<br>";
        print_r($array_sample);
        echo "<br>";
        sort($array_sample);
        print_r($array_sample);
    ?>
</body>
</html>