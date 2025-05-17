<?php

/**
 * Merge two arrays.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($arr1, $arr2) {
    foreach($arr2 as $key => $val) {
      $arr1[] = $val;
    }
    print_r($arr1);
  }

}

$start = new Solution();
$start->action([90, 123, 123], ["hello", "world", 11]);
