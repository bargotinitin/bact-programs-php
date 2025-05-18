<?php

/**
 * Implement your own array_map() function using closures.
 */
function my_array_map(callable $callback, array $array) {
  $result = [];
  foreach ($array as $key => $value) {
      $result[$key] = $callback($value);
  }
  return $result;
}

// Example usage with a closure:
$numbers = [1, 2, 3, 4, 5];
$squares = my_array_map(function($n) {
  return $n * $n;
}, $numbers);

print_r($squares); // Output: [1, 4, 9, 16, 25]

