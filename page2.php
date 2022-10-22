<?php
header('Content-Type: text/html; charset=utf-8');
header('Content-Disposition: attachment; filename="downloaded.txt"');

$inputGet = $_GET["inputGet"];
echo $inputGet;
?>
