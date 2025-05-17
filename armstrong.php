<?php

/**
 * The number which digits powers all equally when summed up
 * becomes the same number.
 * 153 - 1^3 + 5^3 + 3^3
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($num) {
    $s = (string)$num;
    $len = strlen($s) - 1;

    $power = 0;
    while(true) {
      $sum = 0;
      for ($i = 0; $i <= $len; $i++) {
        $val = (int)$s[$i];
        $sum += pow($val, $power);
      }
      if ($sum >= $num) {
        break;
      }
      $power++;
    }

    if ($sum == $num) {
      print "armstrong number";
    } else {
      print "Not a armstrong number";
    }
  }

}

$start = new Solution();
$start->action(153);
