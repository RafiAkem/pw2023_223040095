<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d</title>
    <style>
        .wrapper {
            height: 241.2px;
            width : 250px;  
            border : 1px solid; 
            padding-top:5px;
        }   
        .hitam {
            background-color: black;
            width: 50px;
            height: 50px;
            display: inline-block;
            margin-top:-5px; 
        }
        .putih {
            background-color:white;
            width: 50px;
            height: 50px;
            display: inline-block;  
            box-sizing: border-box;
            margin-top:-5px;     
        }
        
    </style>
</head>
<body>
    <?php 
    echo '<div class="wrapper">';
    for($i= 1; $i <=5; $i++) {
        for($j= 1; $j <=5; $j++){
            if ($i % 2 == 0){
                if($j % 2 == 0) {
                    echo '<div class="hitam"></div>'; 
                } else {
                    echo '<div class="putih"></div>';
                }
            } else {    
                if ($j % 2 == 0) {
                    echo '<div class="putih"></div>';
                } else {
                    echo '<div class="hitam"></div>';
                }
            }
        
        }
    }
    ?>
</body>
</html>