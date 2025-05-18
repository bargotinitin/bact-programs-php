<?php

class Base
{
  public static function who()
  {
    echo __CLASS__;
  }

  public static function test()
  {
    static::who();
  }
}

class Child extends Base
{
  public static function who()
  {
    echo __CLASS__;
  }
}

Child::test();
