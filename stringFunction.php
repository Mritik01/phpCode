<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>

<body>
    <h1>This tutorial for php functions</h1>
    <?php
    $str = 'Hello This is Ritik and I am from Gorakhpur';
    echo strlen($str).'<br>'; // return the length of string.
    echo str_word_count($str).'<br>'; // retrun total world in string.
    echo strrev($str).'<br>';//reverse string.
    echo strpos($str,'This').'<br>'; // return the position of the first match. 
    echo str_replace('Hello','Hi',$str).'<br>'; //replace the string.
    ?>
</body>

</html>