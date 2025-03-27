<?php

$file = "sujit.txt";
$myFile = fopen($file, "r") or die ("File is not created");

echo fread($myFile, filesize($file));
fclose($myFile);

?>