<?php

/**
 * Find the frequency of each character in a string.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($str) {
    $strarray = str_split($str);

    $arr = [];
    $temp = [];
    foreach($strarray as $key => $value) {
      if (in_array($value, $temp)) {
        $arr[$value] = $arr[$value] + 1;
      }
      else {
        $arr[$value] = 1;
      }
      $temp[] = $value;
    }
    print "<pre>";
    print_r($arr);
  }

}

$start = new Solution();
$start->action("helloworld");
