<?php

/**
 * @file
 * Scalar type declarations.
 */

declare(strict_types = 1);

/**
 * Declare(strict_types=1).
 */
function add(int $a, int $b) {
  return $a + $b;
}

var_dump(add(1, 2));
var_dump(add("1", "2"));
