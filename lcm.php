<?php

/**
 * Finding HCF of two numbers.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($a, $b) {
    if ($a > $b) {
      $x = $b;
      $y = $a;
    }
    else {
      $x = $a;
      $y = $b;
    }
    $hcf = $this->calculation($x, $y);
    $lcm = ($x * $y) / $hcf;
    print "LCM = " . $lcm;
  }

  public function calculation($x, $y) {
    for ($i = 2; $i <= $x; $i++) {
      if ($x % $i == 0 && $y % $i == 0) {
        $hcf = $i;
      }
    }
    return $hcf;
  }

}

$start = new Solution();
$start->action(12, 18);
