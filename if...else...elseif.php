<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if...else...elseif</title>
</head>
<body>
    <?php
        // if statement
        $num=5;
        if($num==5){  
            echo "The value of num is 5"; // execute code after condition is true 
        }

        //if..else statement 
        if($num==5){  
            echo "The value of num is 5"; // execute code after condition is true 
        }
        else{
            echo "The value of num is not 5"; //execute code after condition is false
        }

        // if..elseif..else
        if($num==5){
            echo "The value of num is 5"; // execute code after condition is true 
        }
        elseif($num==6){
            echo "The value of num is 6"; // execute code after if condition is false
        }
        else{
            echo "The value of num is not 5 and 6"; // execute code after both condition are false
        }
    
    ?>
</body>
</html>