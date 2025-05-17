<?php

/**
 * Find the Largest Number in an Array
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($arr) {
    $max = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
      if ($max < $arr[$i]) {
        $max = $arr[$i];
      }
    }
    print "Max = " . $max;
  }

}

$start = new Solution();
$start->action([81, 192, 12, 1300, 901, 1212]);
