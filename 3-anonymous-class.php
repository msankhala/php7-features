<?php

/**
 * @file
 * Anonymous class.
 */

// PHP 5.3 implemented new feature called Anonymous functions/ Closures/Lambda.
$array = ['this is lower case string', 'php 5.3'];
$new_array = array_map(function ($a) {
    return strtoupper($a);
}, $array);

var_dump($new_array);

// Php 7.0 anonymous class.
$foo = new class {
  public function foo() {
    return "bar";
  }
};
var_dump($foo, $foo->foo());
