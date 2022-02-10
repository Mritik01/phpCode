<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo date("d-m-Y") . "<br>"; // print date month year

    echo date("l") . "<br>"; // print day name
    date_default_timezone_set("Asia/Kolkata"); // set time zone
    echo date("h") . "<br>"; // print hour
    echo date("i") . "<br>"; // print minutes

    echo date("s") . "<br>"; // print seconds
    echo date("A") . "<br>"; // print lowercase ante meridiem and post meridiem

    $d = mktime(11, 14, 54, 8, 12, 2014); // to create time
    echo "Created date is " . date("Y-m-d h:i:sa", $d);

    // strtotime converting a string to a date
    $d = strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>"; //print tomorrow date
    
    ?>
</body>

</html>