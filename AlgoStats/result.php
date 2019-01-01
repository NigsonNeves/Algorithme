<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>AlgoStat</title>
    </head>
    <body>
        <?php
        include_once 'sorts.php';
        include_once 'sorts2.php';
        include_once 'check.php';

        $tab = checkError($_POST["sortType"],$_POST["numbers"]);
        echo "<h1>".$_POST["sortType"]."</h1>";
        checkView($_POST["sortType"],$tab);

        ?>
    </body>
</html>
