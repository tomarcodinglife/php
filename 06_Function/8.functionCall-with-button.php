<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Call PHP Function with Button</title>
    </head>

    <body>
        <form action="" method="post">
            <button name="button" value="btn">Function Call</button>
        </form>
    </body>

</html>

<?php

    if(isset($_REQUEST['button'])){
        buttonFunction();
    }

    function buttonFunction(){
        echo "Hi this is button function";
    }

?>