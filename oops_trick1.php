<?php

class A {
  public function who() {
      echo "A";
  }

  public function call() {
      $this->who();
  }
}

class B extends A {
  public function who() {
      echo "B";
  }
}

$obj = new B();
$obj->call(); // B
