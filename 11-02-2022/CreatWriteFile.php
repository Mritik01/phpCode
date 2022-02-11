<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create|Write</title>
</head>
<body>
    <h1>This page about create php file</h1>
    <?php
        // we can create file using fopen() function passing writing "w" or appending "a".
        $myfile= fopen("file1.txt","w") or die("file not found");  // open file in write mode if file not exist a new file created.

        $myfile1= fopen("file1.txt","r") or die("file not found"); // open file in reading mode

        $data="Hello I am bluethinker\n";
        fwrite($myfile,$data); // write data  in 'file1.txt'

        $data="Hello I am bluethinker and my name is ritik";
        fwrite($myfile,$data); // write data in 'file.txt' 

        echo fread($myfile1,filesize("file1.txt")); // read data from file1.txt
    ?>
</body>
</html>