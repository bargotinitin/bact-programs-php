<?php

$x = (int) (0.1 + 0.7);
echo $x; // 0


$arr = [];
$arr['10'] = 'ten';
$arr[10] = 'TEN';
print_r($arr); // TEN


echo 'Hello' + 'World'; // Fatal error: Uncaught TypeError: Unsupported operand types: string + string
