<?php

#imprima todos os numero impares de 0 a 100

for ($i = 1; $i < 100; $i += 2) {
  echo "#$i" . PHP_EOL;
}

for ($i = 0; $i <= 100; $i +=1) {
  if($i%2 != 0) {
    echo "$i" . PHP_EOL;
  } else {
    continue;
  }
}