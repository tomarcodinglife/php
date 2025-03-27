<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Read</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <br></br>

        <button type="submit">Read File</button>
    </form>
</body>
</html>


<?php

if(isset($_FILES["file"]) && is_uploaded_file($_FILES['file'] ['tmp_name'])) {
    $file = $_FILES["file"]["tmp_name"];
    $myfile = fopen($file, "r") or die ("Unable to read");

    echo fread($myfile, filesize($file));
    fclose($myfile);
}


?>