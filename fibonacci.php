<?php

/**
 * Fibonacci series.
 * 0 1 1 2 3 5 8 13 21
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($num) {
    $a = 0;
    $b = 1;
    for ($i=1; $i < $num; $i++) {
      echo $a . " ";
      $next = $a + $b;
      $a = $b;
      $b = $next;
    }
  }

}

$start = new Solution();
$start->action(10);
