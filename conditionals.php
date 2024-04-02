<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
</head>
<body>
  <?php 
    
    $x = 8;

    if ($x == 1){
        echo "Karam is very handsome";
    }
    elseif ($x == 2){
        echo "Karam is kinda handsome";
    }
    elseif ($x == 3){
        echo "Karam is kinda handsome";
    }
    elseif ($x == 4){
        echo "Karam is kinda handsome";
    }
    else {
        echo "Karam is very ugly";
    }
   ?>
   <?php 
    $x = "number";
    
    switch ($x) {
        case 1: 
            echo "The answer is 1";
        break;
        case 2:
            echo "The answer is 2";
        break;
        case 3:
            echo "The asnwer is 3";
        break;
        case 4: 
            echo "The answer is 4";
        break;
        default:
            echo "There is no answer";
    }

    ?>
</body>
</html>