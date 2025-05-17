<?php

/**
 * Sort an array in ascending and descending order.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($a, $b) {
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    print $a . "<br>";
    print $b . "<br>";
  }

}

$start = new Solution();
$start->action(9, 10);
