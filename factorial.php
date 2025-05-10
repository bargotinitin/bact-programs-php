<?php

/**
 * Print factorial of a given number.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($num) {
    $factorial = 1;
    for ($i = $num; $i >= 1; $i--) {
      $m = $factorial * $i;
      $factorial = $m;
    }
    print $factorial . "\n";

  }

}

$start = new Solution();
$start->action(5);
