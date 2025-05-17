<?php

/**
 *  Count the Number of Vowels in a String.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($string) {
    $str_length = strlen($string);
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $cnt = 0;
    for ($i= 0 ; $i < $str_length; $i++) {
      $letter = strtolower($string[$i]);
      if(in_array($letter, $vowels)) {
        $cnt++;
      }
    }
    print "Counter = " . $cnt;
  }

}

$start = new Solution();
$start->action("ppp");
