<?php

function sum(int $x, int $y, int $z): int
{
    return $x + $y + $z;
}

function unlimitedSum(int ...$numbers): int
{
    $res = 0;
    for ($i = 0; $i < count($numbers); $i++) { // count() function return the number of data available in an array
        $res += $numbers[$i];
    }
    return $res;
}

function fixedUnlimitedSum(int $x, int $y, int ...$numbers): int
{
    $res = $x + $y;
    for ($i = 0; $i < count($numbers); $i++) {
        $res += $numbers[$i];
    }
    return $res;
}
echo sum(1, 2, 3) . PHP_EOL;
echo unlimitedSum(1, 2, 3, 4, 5) . PHP_EOL;
echo unlimitedSum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) . PHP_EOL; // All argument store in $numbers as array
echo fixedUnlimitedSum(1, 2, 3, 4, 5, 6) . PHP_EOL; // 1,2 as $x,$y and others are as $numbers array
