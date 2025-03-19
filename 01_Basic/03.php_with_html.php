<?php
$h3_color = "magenta";
?>

<?php
$title = "php with html";
$name = "Sujit Tomar";
echo "<h1 style='color:green'> $title </h1>";
?>

<?php
$myname = "Sujit Singh Rajput";
echo "<h1 style='color:blue'>My Name is $myname </h1>";
?>

<h1 style='color:red'>My Name is <?php echo $name; ?> </h1>

<?php
$content_1 = "This is my first content";
$content_2 = "This is my second content";
$content_3 = "This is my third content";
?>

<h3 style='color:<?php echo $h3_color ?>'><?php echo $content_1; ?></h3>
<h3 style='color:<?php echo $h3_color ?>''><?php echo $content_2; ?></h3>
<h3 style='color:<?php echo $h3_color ?>''><?php echo $content_3; ?></h3>
