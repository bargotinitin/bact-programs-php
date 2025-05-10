<?php

/**
 * Check if a given number is a prime number or not.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($num) {
    if ($num == 1) {
      print "Not a prime number";
      return;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
      if ($num % $i == 0) {
        print "Not a prime number.";
        return;
      }
    }
    print "The number is prime";

  }

}

$start = new Solution();
$start->action(37);
