<?php
require './vendor/autoload.php';

use Math\ComplexNumberMutable;

$x = new ComplexNumberMutable(2, -3);
$y = new ComplexNumberMutable(-1, 2);
echo "x = {$x}, y = {$y}", PHP_EOL;

$z = (clone $x)->add($y);
echo "x + y = {$z}", PHP_EOL;

$z = (clone $x)->subtract($y);
echo "x - y = {$z}", PHP_EOL;

$z = (clone $x)->multiply($y);
echo "x * y = {$z}", PHP_EOL;

$z = (clone $x)->divide($y);
echo "x / y = {$z}", PHP_EOL;
