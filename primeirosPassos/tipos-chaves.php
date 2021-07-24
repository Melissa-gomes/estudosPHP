<?php

#manooo quem faria um array associativo assim  ? então ninguem rlx, qualquer duvida, cola na documentação BB a documentação é sua melhor amiga.

$array = [
  1 => 'a',
  '1' => 'b',
  1.5 => 'c',
  true => 'd'
];

foreach ($array as $i) {
  echo $i . PHP_EOL;
}