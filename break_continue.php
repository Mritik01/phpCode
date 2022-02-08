<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break|Continue</title>
</head>

<body>
    <?php

    //break
    echo 'Table of 5 is: <br>';
    $i = 1;
    while ($i <= 10) {
        echo "5 * $i =" . 5 * $i . "<br>";
        if($i==5){
            break;//  jump out of a loop.
        }
        $i++;
    }

    //continue 
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
          continue; //skips the value of 4
        }
        echo "The number is: $x <br>";
      }

    ?>
</body>

</html>