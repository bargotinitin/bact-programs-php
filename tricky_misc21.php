<?php

$a = 5;
$b = &$a;
unset($a);
echo "a = " . $a . "<br/>";
echo "b = " . $b;


// $a - 128JJHJ9823 -> access to 5
// Unset a removes memory address - 128JJHJ9823 from a.
// Hence a is undefined because it does not point to any memory
// $b - 128JJHJ9823 -> access to 5
