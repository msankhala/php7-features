<?php

/**
 * @file
 * Generator memory usage.
 */

$startMemory = memory_get_usage();

function xrange($start, $limit) {
  for ($i = $start; $i < $limit; $i++) {
    yield $i;
  }
}

foreach (xrange(1, 100000) as $value) {
  echo $value . PHP_EOL;
}

$memory_bytes = memory_get_usage() - $startMemory;
echo $memory_bytes . ' bytes' . PHP_EOL;
