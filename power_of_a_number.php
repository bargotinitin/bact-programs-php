<?php

/**
 * Calculate the power of a number (x^y) without using built-in functions.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($num, $power) {
    $final = 1;
    for ($i = 1; $i <= $power; $i++) {
      $final = $num * $final;
    }
    print $final;

  }

}

$start = new Solution();
$start->action(5, 5);
