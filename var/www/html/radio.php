<?php
 shell_exec('sudo -u root -S bash radio.sh < /var/www/html/pass.txt');
 header('Location: index.php');
?>
