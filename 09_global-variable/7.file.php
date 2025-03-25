<?php

// print_r($_FILES);

// echo "file uploaded";

if($_FILES['file']){
    $path = $_FILES['file'] ['name'];
    $uploads_path = "./uploads/" . $path;
    move_uploaded_file ($_FILES['file'] ['tmp_name'], $uploads_path);
    echo "uploaded";
} else{
    die("No File Upload");
}



?>