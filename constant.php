<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    <h1 align=center>This page about constants</h1>
    <?php
        //Define a constant 
        define("NAME","Bluethink"); //value cannot be changed during the script.
        echo NAME.'<br>'; // Bluethink

        // We can create an Array constant.
        define('cars',['audi','bmw','toyota']);
        echo cars[0].'<br>'; //audi;
        
        //Constants are automatically global and can be used across the entire script.
        printCarName();
        function printCarName(){
            echo '<br>'.cars[0].'<br>'; // We can access within function. 
        }
    ?>
</body>
</html>