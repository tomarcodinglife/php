<!-- // Include Once same provide Warning when not load file -->

<?php

echo "........................include section..................";

for ($i=0; $i<5; $i++){
    include ("./content.php");
}

echo "........................include one section..................";

for ($i=0; $i<5; $i++){
    include_once ("./header.php");
}


?>