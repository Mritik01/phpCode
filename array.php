<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <h1>This page about Array</h1>
    <?php
    //An array is a special variable, which can hold more than one value at a time.
    //Indexed arrays
    //Associative arrays


    //Indexed array
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>"; //iterate using indexed number

    //Associative arrays
    //Associative arrays are arrays that use named keys that you assign to them.
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    echo "Peter is " . $age['Peter'] . " years old.<br>";
    
    //iterate using foreach loop
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    ?>
</body>

</html>