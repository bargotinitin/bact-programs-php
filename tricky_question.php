<?php

function f2(): int {
  try {
   throw new \Exception;
  }
  catch(\Exception $e) {
    echo "a";
    return 1;
  }
  finally {
    echo "b";
    return 2;
  }

  echo "c";
  return 3;

}

echo f2(); // Output ??


