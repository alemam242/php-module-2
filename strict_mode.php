<?php

// strict mode enabled
declare(strict_types=1);

//Type hinting
function MySelf(int $age, string $name)
{
    echo "My name is: $name and my age is: $age";
}

//Multiple Type Hinting
function AboutMe(int|string $age, string $name)
{

    echo "My name is: $name and my age is: $age";
}

MySelf(23, "Al Emam");
AboutMe("23", "Emam");
AboutMe(23, "Emam");
