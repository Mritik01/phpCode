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
    
    echo readfile("file.txt")."<br>"; // read file and return total character

    $myfile = fopen("file.txt", "r") or die("file not open"); // we can use "w" erases the contents of the file or creates a new file if it doesn't exist.
    echo fread($myfile,filesize("file.txt"))."<br>"; // read open file 
    fclose($myfile); // to close file 

    $myfile = fopen("file.txt", "r") or die("file not open");
    while(!feof($myfile)){ // read till end-of-file
        echo fgetc($myfile); 
    }
    fclose($myfile);
    ?>
</body>
</html>