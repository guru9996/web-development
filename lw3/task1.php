<?php
echo $_GET['dataList'];
$dataList = substr($dataList, 1, -1);
trim($dataList, ' ');