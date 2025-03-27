<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handle with php</title>
</head>
<body>
    <form action="" method="post">

        <input type="text" placeholder="File Name" name="file-name" required>
        <br></br>
        <textarea name="content" id="content" required></textarea>
        <br></br>
        <button type="submit">Create File</button>
    </form>
</body>
</html>

<?php

if (isset ($_post['file-name'])){
    $fileName = $_post['file-name'];
    $content = $_post['content'];

    $file = fopen($fileName,"w") or die ("Unable to create file");
    fwrite($file, $content);
    fclose($file);

    echo "File created sucessfully";
}


?>