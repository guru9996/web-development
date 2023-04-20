<?php
header("Content-Type: text/html");
$text = $_GET['text'];
$text = trim($text);
echo $text;
