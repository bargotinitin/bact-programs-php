<?php

/**
 *  Reverse a String.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($string) {
    $str_length = strlen($string);
    for ($i= $str_length - 1 ; $i >= 0 ; $i--) {
      print $string[$i];
    }
  }

}

$start = new Solution();
$start->action("Drupal");
