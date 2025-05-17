<?php

/**
 * Fibonacci series by recursion.
 * 0 1 1 2 3 5 8 13 21
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($num) {
    $a = 0;
    $b = 1;
    $this->series($num, $a, $b);
  }

  /**
   * Recursive function.
   */
  public function series($num, $a, $b) {
    echo $a . " ";
    $next = $a + $b;
    $a = $b;
    $b = $next;

    if ($b < $num) {
      $this->series($num, $a, $b);
    }
  }

}

$start = new Solution();
$start->action(100);
