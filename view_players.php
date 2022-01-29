<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        table {
            font-size: 1.7rem;
            color: white;
            height: 60%;
        }
    </style>
</head>

<body>
    <img id="black-background" src="images/black.jpg" alt="">

    <?php
        $handler = fopen("Basket1.txt", "r");
        $i = 0;

        echo "<table>";

        while (!feof($handler)){
            $content = fgets($handler);
            $array = explode(" ", $content);

            echo "<tr>";

            echo "<td>".$array[$i++]."</td>";
            echo "<td>".$array[$i++]."</td>";
            echo "<td>".$array[$i++]."</td>";

            echo "</tr>";

            $i = 0;
        };

        echo "</table>"
    ?>
</body>

</html>