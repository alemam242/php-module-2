<?php
// function fact(int $num): int
// {
//     if ($num == 0) {
//         return 1;
//     }

//     return $num * fact($num - 1);
// }

function fact(int $num)
{
    if ($num < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($num <= 1) {
        return 1;
    } else {
        return $num * fact($num - 1);
    }
}

echo fact(1);
