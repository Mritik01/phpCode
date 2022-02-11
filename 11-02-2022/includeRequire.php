<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require|Include</title>
</head>
<body>
    <?php
    // include another file
    require "dateTime.php"; // require throw error and stop script when file not found
    echo  "<br><br>";
    include "phpDatatypes.php" //// require throw warning and continue script when file not found

    ?>
</body>
</html>