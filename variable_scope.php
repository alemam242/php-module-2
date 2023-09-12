<?php
$name = "Al Emam"; // global scope
$age = 23;
function info()
{
    /**
     * ? There are two way to access global variable inside a function
     * * 1. using 'global' keyword
     * * 2. using super global '$GLOBALS' keyword
     */
    global $name;
    echo $name . PHP_EOL;
    echo $GLOBALS["age"] . PHP_EOL;
}

function local()
{
    $country = "Bangladesh"; // local scope, can't be accessed outside this function

    echo $country . PHP_EOL;
}

function test()
{
    static $i; // static variable and local scope keep store last updated value
    $i = $i ?? 0;
    $i++;

    echo $i . PHP_EOL;
}
function test2()
{
    static $i; // static variable and local scope
    $i = $i ?? 0;
    $i++;

    echo $i . PHP_EOL;
}

info();
echo $name . PHP_EOL;

test(); // output: 1
test(); // output: 2
test(); // output: 3
test(); // output: 4
test(); // output: 5
test2(); // output: 1
test2(); // output: 2
test2(); // output: 3
test2(); // output: 4
