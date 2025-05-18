<?php

class A
{
  public static $val = 0;

  public static function inc()
  {
    static::$val++;
  }
}

class B extends A {}

B::inc();
echo A::$val; // 1
