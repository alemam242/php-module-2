<?php

$sum = 0;
for ($i = 1; $i <= 50; $i++) {
    $sum += pow($i, 2);
    // echo pow($i, 2) . " ";
}

echo "\nSum: " . $sum;
