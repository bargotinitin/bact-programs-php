<?php

/**
 * Finding LCM of any array.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($arr) {
    $result = $arr[0];
    for ($i=0; $i < count($arr); $i++) {
      $result = $this->lcm($result, $arr[$i]);
    }
    print "LCM of an array = " . $result;
  }


  public function lcm($x, $y) {
    $hcf = $this->hcf($x, $y);
    $lcm = ($x * $y) / $hcf;
    return $lcm;
  }

  public function hcf($x, $y) {
    for ($i = 2; $i <= $x; $i++) {
      if ($x % $i == 0 && $y % $i == 0) {
        $hcf = $i;
      }
    }
    return $hcf;
  }

}

$start = new Solution();
$start->action([75, 15, 12]);
