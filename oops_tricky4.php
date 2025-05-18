<?php

class A {
    public $name;
}

class B extends A {
    private $name; // Fatal error: Access level to B::$name must be public (as in class A)
}
