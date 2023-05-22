<?php
$file = 'data.txt';
$data = $_POST['api_key'];
file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
?>
