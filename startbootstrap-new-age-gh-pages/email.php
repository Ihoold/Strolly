<?php
$fp = fopen('mails.txt', 'w');
$body = file_get_contents('php://input');
fwrite($fp, $body);
fclose($fp);
?>
