<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="fileup" id=""> <br>
            <input type="submit" value="submit">
        </form>

    </div>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uploadDir = ""; // file location 
        $fileDir = $uploadDir . basename($_FILES['fileup']['name']);
        $uploadDone = 1;
        $fileExt = strtolower(pathinfo($fileDir, PATHINFO_EXTENSION)) . "<br>"; // fetch extension

        //checking file is image or not
        $check = getimagesize($_FILES['fileup']['tmp_name']); // 
        print_r($check);
        if ($check !== false) {
            $uploadDone = 1;
        } else {
            echo 'Your file is not image.<br>';
            $uploadDone = 0;
        }
        // checking file exist or not
        if (file_exists($fileDir)) {
            echo "File already exists.<br>";
            $uploadDone = 0;
        }
        // cheching file size
        if ($_FILES['fileup']['size'] > 2097152) {
            echo "Your file is too large.<br>";
            $uploadDone = 0;
        }
        // checking uploadDone value 0 or 1
        if ($uploadDone == 0) {
            echo "Your file not upload.<br>";
        } else {
            if (move_uploaded_file($_FILES['fileup']['tmp_name'], $fileDir)) { // uploading file
                echo "Your file" . htmlspecialchars(basename($_FILES["fileup"]["name"])) . " has been uploaded.";
            } else {
                echo "Your file not uploaded.<br>";
            }
        }
    }

    ?>
</body>

</html>