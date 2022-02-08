<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>
    <h1>This page about function</h1>
    <?php
    function writeMsg(){ //starting of function
        echo "Bluethink pvt ltd";
    } // end of function
    
    writeMsg(); // call the function

    //PHP Function Arguments
    function companyName($cname) { // $cname is argument we can pass more the one argument separate by (,)
        echo "Your company name is $cname<br>";
      }    
      companyName("Bluethink"); //function call


      //PHP Default Argument Value
      function setHeight(int $minheight = 50) { // 
        echo "The height is : $minheight <br>";
      } 
      setHeight(); //will use the default value of 50

      //Returning values
      function sum(int $x, int $y) {
        $z = $x + $y;
        return $z;  //return sum of x and y
      }
      echo "5 + 10 = " . sum(5, 10) . "<br>"; // function call

      //Passing Arguments by Reference
      function add_five(&$value) { // change the variable that was passed in
        $value += 5;
      }
      
      $num = 2;
      add_five($num); 
      echo $num; // 7
    ?>

</body>

</html>