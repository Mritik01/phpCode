<?php
//set cookies
$cookiesName="user";
$cookiesValue="Ritik";
setcookie($cookiesName,$cookiesValue,time() + 86400,'/');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
    // checking cookie set or not
        if(!isset($_COOKIE[$cookiesName])){
            echo "cookie not set";
        }
        else{
            echo "cookie set";
        }
   
    ?>
</body>
</html>