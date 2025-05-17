<?php

/**
 * Palindrome Check.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($string) {
    $str_length = strlen($string);
    $string = strtolower($string);
    $reversed_string = '';
    for ($i= $str_length - 1 ; $i >= 0 ; $i--) {
      $reversed_string .= $string[$i];
    }
    $reversed_string = strtolower($reversed_string);
    if ($string == $reversed_string) {
      print "Palindrome";
    }
    else {
      print "Not a palindrome";
    }
  }

}

$start = new Solution();
$start->action("malayalam");
