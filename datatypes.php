<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data types</title>
</head>
<body>
    <h1>This is Data Types</h1>
    <?php

        //string 

        $name='Ritik'; // we can also use double quoted
        echo $name.'<br>'; // . is a string concatenation operator.

        //integer
        
        $number=123;
        echo '<pre>'; // more descriptive output.
        var_dump($number).'<br>'; // var_dump shows datatype and value.
        echo '</pre>';

        //flot
       
        $floaNumber=12.34;
        echo '<pre>'; // more descriptive output.
        var_dump($number).'<br>'; //A float is a number with a decimal point.
        echo '</pre>';

        //boolean 

        $bool=true;
        var_dump($bool); // true

        // Array

        $arr=array('Ritik','Abhishek','Vikas','Gourav'); // array is a list of item or elements.
        echo '<pre>'; 
        var_dump($arr).'<br>'; 
        echo '</pre>';

        //Associative array

        $associativeArray=array(
            'Name'=>'Ritik',
            'age'=>22,
            'class'=>'A-leve'
        );                      // key value pair array.

        //Null
        $Nl=null; // null it means not assign value.
        var_dump($Nl);

        // resource is anoter data type we will cover after some time.
    ?>
</body>
</html>