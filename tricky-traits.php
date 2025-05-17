<?php

trait A {
  public function abc() {
    print "## In A ##";
  }
}

trait B {
  public function abc() {
    print "-- In B -- ";
  }
}

class Xyz {
  use A, B {
    A::abc insteadof B;
    B::abc as test;
  }

  public function display() {
    print "***" . $this->abc();
    print '$$$' . $this->test();
    // Fatal error: Trait method B::abc has not been applied as Xyz::abc, because of collision with A::abc
  }
}

$obj = new Xyz;
$obj->display();
