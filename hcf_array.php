<?php

/**
 * Finding HCF of numbers in array.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($arr) {
    $min = min($arr);
    $hcf = $this->calculation($min, $arr);
    print "HCF in array = " . $hcf;
  }

  public function calculation($x, $arr) {
    $length = count($arr);
    for ($i = 2; $i <= $x; $i++) {
      $cnt = 1;
      foreach ($arr as $value) {
        if ($value % $i == 0) {
          if ($cnt == $length) {
            $hcf = $i;
          }
          $cnt++;
        }
      }
    }
    return $hcf;
  }

}

$start = new Solution();
$start->action([12, 60, 100, 40, 60, 80]);
