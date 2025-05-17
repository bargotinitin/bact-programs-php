<?php

/**
 * Sort an array in ascending and descending order.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($arr) {
    $arrlength = count($arr) - 1;
    $filter = [];
    $filter[] = $arr[0];
    for ($i = 1 ; $i <= $arrlength; $i++) {
      if (!in_array($arr[$i], $filter)) {
        $filter[] = $arr[$i];
      }
    }
    print_r($filter);
  }

}

$start = new Solution();
$start->action([9, 8, 55, 8, 17, 2, 18, 9, 8, 17]);
