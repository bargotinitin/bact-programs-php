<?php

/**
 * Find the second Largest Number in an Array
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($arr, $n) {
    $length = count($arr) - 1;

    // M1
    // for($i = 0; $i < $length; $i++) {
    //   for ($j = 0; $j < $length - $i; $j++) {
    //     if ($arr[$j] < $arr[$j+1]) {
    //       $temp = $arr[$j];
    //       $arr[$j] =  $arr[$j+1];
    //       $arr[$j+1] =  $temp;
    //     }
    //   }
    // }
    // $n = $n - 1;
    // print "Nth largest = " . $arr[$n];

    // M2
    rsort($arr);
    print $arr[1];

  }

}

$start = new Solution();
$start->action([81, 192, 12, 1300, 901, 1212], 2);
