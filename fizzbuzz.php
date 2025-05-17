<?php

/**
 *  Print numbers from 1 to 100. For multiples of 3, print "Fizz"; for multiples of 5, print *"Buzz"; for both, print "FizzBuzz".
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($num1, $num2, $limit) {
    for ($i= 1 ; $i <= $limit; $i++) {
      if ($i % $num1 == 0) {
        print "Fizz = " . $i . "<br/>";
      }
      if ($i % $num2 == 0) {
        print "Buzz = " . $i . "<br/>";
      }
    }
  }

}

$start = new Solution();
$start->action(3, 5, 100);
