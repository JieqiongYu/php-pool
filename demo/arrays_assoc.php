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
        $number = array('juanita', 'maria', 'jose');

        echo $number[2] . "<br>";
        print_r($number);
        echo "<br>";

        $names = array("first_name" => 'Mer');
        print_r($names);
        echo "<br>";
        echo $names[first_name];
    ?>
</body>
</html>