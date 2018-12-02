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
        $global_variable = "outside";

        function convert() {
            $global_variable = "inside";
        }

        echo $global_variable;
        echo "<br>";
        convert();
        echo $global_variable;

        function change_global() {
            global $global_variable;
            $global_variable = "inside";
        }

        echo "<br>";
        change_global();
        echo $global_variable;
    ?>
</body>
</html>