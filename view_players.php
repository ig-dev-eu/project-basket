<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="functionalpage.css">
    <title>Document</title>
    <style>
        body {
            justify-content: start;
        }
    </style>
</head>

<body>
    <h1>All Basketball Players</h1>

    <?php
        $handler = fopen("Basket1.txt", "r");

        echo "<table>";
        
        echo "<tr>";
        echo "<th>"."Name"."</th>";
        echo "<th>"."Surname"."</th>";
        echo "<th>"."Height"."</th>";
        echo "</tr>";

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
