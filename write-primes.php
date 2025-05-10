<?php

/**
 * Writes prime number till a given number.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($num) {
    for ($i = 2; $i <= $num; $i++) {

      for ($j = 2; $j <= $i; $j++) {
        if ($i % $j == 0) {
          $flag = $j;
          break;
        }
      }

      if ($i == $flag) {
        print $i . "\n";
      }
    }
  }

}

$start = new Solution();
$start->action(100);
