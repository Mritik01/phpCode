<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>echo,print</title>
</head>
<body>
    <h1>This page about echo and print</h1>
    <?php
    $txt="Bluethink pvt ltd";
    $post="Software engineer";
    
    echo "Your company name is $txt and your post is $post <br>"; //display output on the screen 
    print "Your company name is $txt and your age is $post <br>"; // print also display output on the screen
    // print "Your company name is $txt","and your age is $post"; // ERROR because it's take only one parameter
    ?>
</body>
</html>