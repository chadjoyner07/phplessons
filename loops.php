<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
<?php
    include 'includes/headers.php';

?>
<?php
    //Loop

    //While Loop
    //Do while Loop
    //For Loop
    //Foreach Loop
    $x = 1;
    while ($x <= 5){
        echo "hi there<br>";
        $x++;
    };
?>
<?php
    //Loop

    //While Loop
    //Do while Loop
    //For Loop
    //Foreach Loop
    $x = 1;
    do {
        echo "hi there<br>";
        $x++;
    }
    while ($x <= 5);
?>
<?php
    //While Loop
    //Do while Loop
    //Foreach Loop

    for ($x = 1; $x <= 10; $x++){
        echo "hi<br>";
    }
?>
<?php
    //Loop 

    //Do while loop 
    //For Loop
    //Foreach Loop
    $array = array("Sigma", "Chad", "Kelli", "Karam", "David");

    foreach ($array as $loopdata){
        echo "My name is " .$loopdata. "<br>";
    }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>