<?php
$prevNumber = 1;
$curNumber = 1;
echo $curNumber;
echo ' ';
while ($curNumber < 100)
{
    $temp = $curNumber;
    echo $curNumber;
    echo ' ';
    $curNumber = $curNumber + $prevNumber;
    $prevNumber = $temp;
}
