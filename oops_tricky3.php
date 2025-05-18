<?php

class ParentClass {

  public function __construct()
  {
    echo "Parent";
  }
}

class ChildClass extends ParentClass {

  public function __construct()
  {
    parent::__construct();
    echo "Child";
  }
}

new ChildClass(); // ParentChild
