<?php
for ($i = 1; $i <= 10; $i++) {
    echo "Multiplication Table of $i\n";
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . $i * $j . "\n";
    }
    echo "----------------\n";
}
