<?php

$a = 1;
$b = 2;
function swap($a, $b)
{
  $tmp = $a;
  $a = $b;
  $b = $tmp;
}
swap($a, $b);
echo "$a $b";
