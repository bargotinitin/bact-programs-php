<?php

/**
 * Implement a function without using loops or recursion to calculate the sum from 1 to N.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($num) {
    print ($num * ($num + 1)) / 2;
  }

}

$start = new Solution();
$start->action(10);
