<?php

/**
 * Reverse a number without using strings, arrays, or built-in reverse functions.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($num) {
    $reversed = 0;
    while($num >= 1) {
      $remainder = $num % 10;
      $num = $num/10;
      $reversed = $reversed * 10 + $remainder;
    }
    print $reversed;
  }

}

$start = new Solution();
$start->action(12345);
