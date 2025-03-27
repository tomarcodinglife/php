<?php

$path = "C:/xampp/htdocs/php/10_file-handle";
$items = scandir($path);

print_r($items); 
// return -   Array ( [0] => . [1] => .. [2] => 1.file_create.php [3] => 2.file-with-html.php [4] => 3.file-read.php [5] => 4.file-read.php [6] => 5.folder-file-list.php [7] => abc [8] => demo [9] => dummy.txt [10] => sujit.txt ) 


// for remove . and ..
$newitems = array_diff($items, array(".", ".."));
print_r($newitems); 
// return - Array ( [2] => 1.file_create.php [3] => 2.file-with-html.php [4] => 3.file-read.php [5] => 4.file-read.php [6] => 5.folder-file-list.php [7] => abc [8] => demo [9] => dummy.txt [10] => sujit.txt ) 


foreach ($items as $it) {
    echo "<a href=$path/$it>$it<a>";
    echo "<br>";
}

?>