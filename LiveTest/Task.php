<?php
//Task 1
echo "Even numbers between (1-10): ";
for ($i = 2; $i <= 10; $i += 2) {
    echo $i . " ";
}

echo "\n";
//Task 2
function greet(string $name)
{
    echo "Hello, " . $name;
}

greet("Al Emam");

echo "\n";
//Task 3
$number = 5;
function factorial(int $num)
{
    if ($num < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($num <= 1) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}

echo "Factorial of $number is: " . factorial($number);


echo "\n";
//Task 4
function fibonacci(int $x)
{
    if ($x == 1 || $x == 0) {
        return $x;
    } else {
        return (fibonacci($x - 1) + fibonacci($x - 2));
    }
}

$n = 10;
for ($i = 0; $i < $n; $i++) {
    echo fibonacci($i) . " ";
}
