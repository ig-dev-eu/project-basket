<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="functionalpage.css">
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

    <?php
        $handler = fopen("Basket1.txt", "r");

        echo "<table>";

        while (!feof($handler)){
            $content = fgets($handler);
            $player_data = explode(" ", $content);
            echo "<tr>";

            echo "<td>".$player_data[0]."</td>";
            echo "<td>".$player_data[1]."</td>";
            echo "<td>".$player_data[2]."</td>";

            echo "</tr>";
        };

        echo "</table>"
    ?>
</body>

</html>
