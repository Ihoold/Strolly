<?php
$fp = fopen(dirname(__FILE__).'/mails.txt', 'a');
$email = $_POST['email'];
fwrite($fp, $email."\n");
fclose($fp);
?>
