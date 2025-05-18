<?php

$a = 10;
function getA() {
    global $a;
    return $a;
}
echo getA();
