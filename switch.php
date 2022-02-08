<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <?php
    $favcolor = "red"; //assign a variable 

    switch ($favcolor) { //put the variable in the case
        case "red": // here match variable value, execute this block 
            echo "Your favorite color is red!";
            break;

        case "blue":
            echo "Your favorite color is blue!";
            break;

        case "green":
            echo "Your favorite color is green!";
            break;

        default: // if not match any option then execute this block
            echo "Your favorite color is neither red, blue, nor green!";
    }
    ?>
</body>

</html>