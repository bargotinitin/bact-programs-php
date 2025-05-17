<?php

/**
 *  Sum of Numbers from 1 to N.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($num) {
    $sum = 0;
    for ($i = 1; $i <= $num; $i++) {
      $sum += $i;
    }
    print $sum . "\n";

  }

}

$start = new Solution();
$start->action(10);
