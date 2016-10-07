<?php 
$fn = "frec.txt"; 
$file = fopen($fn, "w+"); 
$size = filesize($fn); 

if($_POST['addition']) fwrite($file, $_POST['addition']); 

$text = fread($file, $size); 
fclose($file); 
header('Location: index.php');
?> 
