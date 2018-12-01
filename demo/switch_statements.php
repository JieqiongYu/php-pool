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
         $number = 11;

         switch($number) {
            case 10: 
                echo "it is 10";
                break;
            case 37:
                echo "it is 37";
                break;
            default:
                echo "We could not find anything";
                break;
         }
    ?>
</body>
</html>