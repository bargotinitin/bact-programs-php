<?php

// Can you swap two variables without using a third variable, arithmetic, or bitwise operators?

$a = 5;
$b = 6;

[$a, $b] = [$b, $a];

echo $a . ',' . $b; // Output: 6,5
