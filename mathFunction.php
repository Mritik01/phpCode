<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>
<body>  
    <h1>This page about php math</h1>
    <?php
        // The min() and max() functions can be used to find the lowest or highest value in a list of arguments:
        echo min(12,34,64,21,11,54).'<br>'; //11
        echo max(12,34,64,21,11,54).'<br>';//64

        //Positive value of a number
        echo abs(-12.6).'<br>';// 12.6

        //This function returns the square root of a number
        echo sqrt(64).'<br>'; //8

        //This function rounds a floating-point number to its nearest integer:
        echo round(64.7).'<br>'; //65
        
        //This function generates a random number
        echo rand(1,10); // May be 4 or 6. 
    ?>
</body>
</html>