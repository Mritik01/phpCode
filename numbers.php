<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>

<body>
    <h1>This chapter about numbers.</h1>
    <?php

    // Integer Number

    echo PHP_INT_MAX . '<br>'; //  The largest integer supported
    echo PHP_INT_MIN . '<br>'; //The smallest integer supported
    echo PHP_INT_SIZE . '<br>'; //The size of an integer in bytes

    // Check interger or not

    $data1 = '234234325k23';
    $data2 = 8923590285902;
    echo var_dump(is_int($data2)) . '<br>'; // To check number is integer or not.
    echo var_dump(is_long($data1)) . '<br>'; // bool(false)

    // Float Number

    echo PHP_FLOAT_MAX . '<br>'; // The largest representable floating point number
    echo PHP_FLOAT_MIN . '<br>'; // The smallest representable positive floating point number
    echo -PHP_FLOAT_MIN . '<br>'; //  The smallest representable negative floating point number

    // Check float or not

    $floatData = 3434.54;
    echo var_dump(is_float($floatData)) . '<br>'; // To check number is float of not. 

    //PHP NaN- NaN stands for Not a Number.

    //Numerical string 

    $num1 = 2324;
    $num2 = '4343';
    $num3 = 'Bluethink pvt. ltd';
    echo var_dump(is_numeric($num1)) . '<br>'; // Function returns true if the variable is a number or a numeric string
    echo var_dump(is_numeric($num2)) . '<br>'; //Bool(true)
    echo var_dump(is_numeric($num3)) . '<br>'; // Bool(false)

    //PHP Casting

    $num = '3474'; // Data type is string.
    $num = (int)$num; // Now data type of num is integer

    $x = "20.8";
    $int_cast = (int)$x; // Converting float to int.
    echo $int_cast; //20

    ?>
</body>

</html>