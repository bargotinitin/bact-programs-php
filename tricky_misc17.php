<?php

$a = 1;
$b = function () use (&$a) {
  $a++;
};
$b();
echo $a; // 2
