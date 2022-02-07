<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <h1 align=center>This page about operators</h1>
    <?php
    //PHP Arithmetic Operators
    $x=20;
    $y=10;
    echo $x + $y.'<br>'; //30
    echo $x - $y.'<br>'; //10
    echo $x / $y.'<br>'; //2
    echo $x * $y.'<br>'; //200
    echo $x % $y.'<br>'; //0

    //PHP Assignment Operators

    $total = $x + $y; // Result of x and y assign in total variable
    $x += $y; // Result of x and y assign in total variable

    //PHP Comparison Operators
     
    //Returns true if $x is equal to $y
    echo var_dump($x==$y).'<br>'; //bool(false)
    
    //Returns true if $x is equal to $yReturns true if $x is equal to $y
    echo var_dump($x===$y).'<br>';  //bool(false)

    //Returns true if $x is not equal to $y
    echo var_dump($x!=$y).'<br>'; //bool(false)
    

    //PHP Increment / Decrement Operators

    // Pre-increment
    echo ++$x.'<br>'; // Increments $x by one, then returns $x (It means $x= $x+1);

    //Post-increment
    echo $x++.'<br>'; // Returns $x, then increments $x by one (It means $x= $x+1);

    //Pre-decrement
    echo --$x.'<br>';// Decrements $x by one, then returns $x (It means  $x= $x-1);

    //Post-decrement
    echo --$x.'<br>';// Returns $x, then decrements $x by one (It means  $x= $x-1);
    
    ?>
</body>
</html>