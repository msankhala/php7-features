<?php

/**
 * @file
 * Array memory usage.
 */

// Generators added in PHP 5.5. Generators are the functions which has yield
// statement rather then return.
function gen() {
  yield 1;
  yield 2;
}

foreach (gen() as $val) {
  echo $val, PHP_EOL;
}

// $startMemory = memory_get_usage();
// $array = range(1, 100000);
// $memory_bytes = memory_get_usage() - $startMemory;

// echo $memory_bytes . ' bytes' . PHP_EOL;
// $memory_mb = $memory_bytes / 1024 /1024;
// echo $memory_mb . ' MB' . PHP_EOL;
