<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>
    <h1>This page about loop</h1>
    <?php
    //Loops are used to execute the same block of code again and again, as long as a certain condition is true.

    // while loop
    echo 'Table of 5 is: <br>';
    $i = 1;
    while ($i <= 10) {
        echo "5 * $i =" . 5 * $i . "<br>";
        $i++;
    }

    // do while loop

    echo '</br>Table of 6 is:<br>';
    $i = 1;
    do {
        echo "6 * $i =" . 6 * $i . "<br>";
        $i++;
    } while ($i <= 10); // if condition is false the code execute at least one time.

    //for loop 
    echo '</br>Table of 7 is:</br>';
    for ($i = 1; $i <= 10; $i++) { // for (init counter; test counter; increment counter)
        echo "7 * $i =" . 7 * $i . "<br>";
    }

    //foreach loop 
    $colors = array("red", "green", "blue", "yellow"); // foreach loop for array
    foreach ($colors as $value) {
        echo "$value <br>";
    }

    ?>
</body>

</html>