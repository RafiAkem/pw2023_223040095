<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c</title>
    <style>

        .Kotak {
            background-color:salmon;
            border: 1px solid;
            width: 50px;
            height: 50px;
            display:flex;
            text-align:center;
            flex-direction:column;
            justify-content:center;
            align-items:center;

        }

        h2 {
            margin-top: 30px;
        }

        .angka {
            display:flex;
        }
    </style>
</head>
<body>
    <?php 
    for($i = 10; $i >= 0; $i--) {
        $j = 1;
        echo '<div class="angka">';
        for($k = 0; $k <$i; $k++){
            echo '<div class="Kotak"><h3>' . $j++ . '</h3></div>';
        }
        echo "</div>";
    } 
    ?>
</body>
</html>