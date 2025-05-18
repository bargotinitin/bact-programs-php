<?php

/**
 * Evaluates a mathematical expression string like "3 + 4 * (2 - 1)" without using eval().
 * @todo - not done yet.
 */
class Solution {

  /**
   * Performs the required action.
   */
  public function action($str) {
    $str = trim($str);
    $str = str_replace(' ', '', $str);
    $arr = str_split($str);

    $arr = str_split($str);
    print"<pre>"; print_r($arr);

    $len = count($arr);
    $result = 0;
    foreach ($arr as $key => $value) {
      $first = $value;
      if ($key + 1 < $len) {
        $second = $arr[$key + 1];
      }
      if ($key + 2 < $len) {
        $third = $arr[$key + 2];
      }

      if ($second == '+' || $second == '-' || $second == '*' || $second == '/') {
        // print $first . '---' . $second . '----' . $third . "<br/>";
        switch($second) {
          case '+':
            $result += $first + $third;
            break;
          case '-':
            $result += $first - $third;
            break;
          case '*':
            $result += $first * $third;
            break;
          case '/':
            $result += $first / $third;
            break;
        }
      }


      if ($value == '(') {
        $k1 = $key;
      }
      if ($value == ')') {
        $k2 = $key;
      }

      if (!empty($k1) && !empty($k2)) {
        print $k1 . '---' . $k2;
      }

    }

    print $result;



  }

}

$start = new Solution();
$start->action("3 + 4 * 8");
