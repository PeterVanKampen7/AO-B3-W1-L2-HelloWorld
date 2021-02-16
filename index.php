<?php 
    define("OUTPUT", "Hello World!");
    
    $learning = "Learning PHP";
    $learning = OUTPUT;

    $hello = "Hello";
    $world = "World!";

    $array = ["Hello", "World!"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AO-B3-W1-L2</title>
</head>
<body>
    <h1><?php echo "Hello World!"; ?></h1>
    <br>
    <h1><?php echo OUTPUT; ?></h1>
    <br>
    <h1><?php echo $learning; ?></h1>
    <br>
    <h1><?php echo $hello . " " . $world; ?></h1>
    <br>
    <h1><?php echo implode(" ", $array); ?></h1>
</body>
</html>