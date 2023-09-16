<?php
$i = 0;
$j = 1;

echo $i . " " . $j . " ";
$res = $i + $j;
while ($res < 100) {
    echo $res . " ";
    $i = $j;
    $j = $res;
    $res = $i + $j;
}
