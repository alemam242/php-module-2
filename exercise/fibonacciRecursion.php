<?php

function fib(int $x)
{
    if ($x == 1 || $x == 0) {
        return $x;
    } else {
        return (fib($x - 1) + fib($x - 2));
    }
}

$n = 10;
for ($i = 0; $i < $n; $i++) {
    echo fib($i) . " ";
}
