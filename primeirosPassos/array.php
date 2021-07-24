<?php

$listaDeIdades = [12, 27, 19, 45];

for ($i = 0; $i < count($listaDeIdades); $i += 1){
  $idade = $listaDeIdades[$i];
  echo "$idade" .PHP_EOL;
}

#echo $listaDeIdades[1];