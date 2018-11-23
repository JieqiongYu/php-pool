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
        // array() method is the old way
        // the new way looks like this:
        // $numberList = [267,8765,345,'5345',345,'<h1>Hello</h1>'];
        $numberList = array(267,8765,345,'5345',345,'<h1>Hello</h1>');
        
        echo $numberList[0];
        echo "<br>";
        
        print_r($numberList);

    ?>
</body>
</html>