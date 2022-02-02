<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="functionalpage.css">
    <title>View Players By Height</title>
    <style>
        form {
            width: 35%;
        }

        .btn 
        {
            color: var(--basket-orange);
            border-color: var(--basket-orange);
            font-size: 1.5rem;
            transition: 0.2s;
        }

        .btn:hover 
        {
            background-color: var(--basket-orange);
            border-color: var(--basket-orange);
            transform: scale(1.05);
        }
    </style>
</head>

<?php
$is_first_page = !(array_key_exists("height", $_GET));
$players = array();
if(!$is_first_page){ 
    $handler = fopen("Basket1.txt", "r");
    $height = $_GET['height'];
    while (!feof($handler)){
        $content = fgets($handler);
        $player_data = explode(" ", $content);
        if($player_data[0] != ""){
            if($player_data[2] == $height){
                $players[] = $player_data;
            }
        }
    }
    echo "<body style=\"justify-content: start;\">";
} else {
    echo "<body>";
}
?>

<body>
    <h1 style="margin-bottom: 30px;">View Basketball Players By Height</h1>
    <form action="view_players_by_height.php" method="GET">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <input type="number" class="form-control" 
                    id="height" min="100" max="300" name="height">
                </div>
            </div>
            <div class="col-8">
                <button type="submit" class="btn btn-outline-primary">View Table</button>
            </div>
        </div>
    </form>

<?php
if(!$is_first_page){
    if(empty($players)){
        echo "  <div style=\"margin-top: 40px;\" class=\"alert alert-warning\" role=\"alert\">
                    NOBODY HAS THIS HEIGHT
                </div>";
    } else {
        echo "<table>";
        
        echo "<tr>";
        echo "<th>"."Name"."</th>";
        echo "<th>"."Surname"."</th>";
        echo "<th>"."Height"."</th>";
        echo "</tr>";

        foreach ($players as $player){
            echo "<tr>";
            
            echo "<td>".$player[0]."</td>";
            echo "<td>".$player[1]."</td>";
            echo "<td>".$player[2]."</td>";

            echo "</tr>";
        }

        echo "</table>";
    }
}
?>

</body>

</html>
