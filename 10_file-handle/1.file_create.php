<?php

$fileName = "dummy.txt";
$content = "Hi I am Sujit Tomar Learning php";
$file = fopen($fileName, "w") or die ("Unable to create". $fileName) ;

fwrite($file, $content);
fclose($file);

echo "file created" . htmlspecialchars($fileName);

?>