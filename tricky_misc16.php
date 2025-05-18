<?php

function foo(&$x) {
  $x += 10;
}
$a = 5;
foo($a);
echo $a; // 15
