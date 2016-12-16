<?php

/**
 * @file
 * Generator return expression.
 */

$gen = (function() {
  yield 1;
  yield 2;
  return 3;
})();

// var_dump($gen);
foreach ($gen as $val) {
  echo $val, PHP_EOL;
}

echo $gen->getReturn(), PHP_EOL;
