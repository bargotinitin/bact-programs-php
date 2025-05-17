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
    for ($i = 0 ; $i < $arrlength; $i++) {

      for ($j = 0; $j < $arrlength - $i; $j++) {
        // print $j . '----' . $j+1 . "<br/>";
        if ($arr[$j] > $arr[$j+1]) {
          $temp = $arr[$j];
          $arr[$j] = $arr[$j + 1];
          $arr[$j + 1] = $temp;
        }
      }

    }
    print_r($arr);
  }

}

$start = new Solution();
$start->action([9, 8, 55, 17]);
