<?php
// Raw Anonymous Function
(function () {
    echo "Hello Everyone!<br>";
})();


// Assign Anonymous Function
$Func = function () {
    echo "Assign value into Anonymous Function<br>";
};
$Func();

// Assign Anonymous Function With Parameter
$Func2 = function ($x, $y) {
    echo "Sum = " . $x + $y . "<br>";
};
$Func2(10, 20);


//Arrow Function
$Total = fn ($x, $y) => $x + $y; // Can't echo, can only return value
echo $Total(10, 10);

// Return Type of Function
function average($a, $b)
{
    $sum = $a + $b;
    return $sum / 2;
}

// Define Return Type of Function
function avg($a, $b): float
{
    $sum = $a + $b;
    return $sum / 2;
}

// Multiple Return Type of Function
function avg2($a, $b): int|float
{
    $sum = $a + $b;
    return $sum / 2;
}

// Null return type of function
function doSomething(): ?int
{
    $sum = 10 + 20 + 30;
    echo "Sum = $sum";
    return null;
}

// Return type void
function doSum(): void
{
    echo "Sum: " . (654 + 987);
}
