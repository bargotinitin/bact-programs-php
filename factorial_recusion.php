<?php

/**
 * Print factorial of a given number by recursion.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($num) {
    $factorial = 1;
    $output = $this->calculation($num, $factorial);
    print "Factorial by recursive function =  " . $output;
  }

  /**
   * Recursive function.
   */
  public function calculation($num, $factorial) {
    $result = $num * $factorial;
    $num--;
    if ($num >= 1) {
      return $this->calculation($num, $result);
    }
    else {
      return $result;
    }
  }

}

$start = new Solution();
$start->action(5);
