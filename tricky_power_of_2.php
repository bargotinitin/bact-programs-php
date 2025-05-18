<?php

/**
 * Detect if a number is a power of two using bitwise operations.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($n) {

    if (($n & ($n - 1)) === 0) {
      print "Power of 2";
    }
    else {
     print "NOT a Power of 2";
    }
  }

}

$start = new Solution();
$start->action(9);
