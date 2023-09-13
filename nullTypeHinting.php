<?php
// Null Type Hinting
function MyFunction(?string $text)
{
    echo $text;
}

MyFunction("Hello");
MyFunction(null);
