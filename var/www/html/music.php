<?php 
$fn2 = "music.txt"; 
$file2 = fopen($fn2, "w+"); 
$size2 = filesize($fn2); 

if($_POST['addition2']) fwrite($file2, $_POST['addition2']); 

$text2 = fread($file2, $size2); 
fclose($file2); 
header('Location: index.php');
?> 
