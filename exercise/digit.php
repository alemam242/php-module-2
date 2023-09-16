<?php
$num = 12345;

echo "Individual Digits are: ";
while ($num > 0) {
    $digit = $num % 10;
    echo $digit . " ";
    $num = intval($num / 10);
}

echo "\n";

$num = 12345;
$count = 0;
echo "Count of digits: ";
while ($num > 0) {
    $digit = $num % 10;
    $count++;
    $num = intval($num / 10);
}

echo "$count\n";


$num = 12345;
$sum = 0;
echo "Sum of Digits are: ";
while ($num > 0) {
    $digit = $num % 10;
    $sum += $digit;
    $num = intval($num / 10);
}

echo "$sum\n";
