<?php

$multiplicador = 5;

for ($i = 1; $i <= 10; $i +=1) {
  $resultado = $multiplicador * $i;
  echo "$multiplicador x $i = $resultado" . PHP_EOL;
}