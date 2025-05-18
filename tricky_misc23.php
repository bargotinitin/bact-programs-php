<?php


function &giveRef() {
    static $val = 100;
    return $val;
}
$x = &giveRef(); // hold address, not execution

print "x = " . $x . "<br/>";
$x = 200; // holds 200

print "x = " . $x . "<br/>";

echo giveRef(); // 200
