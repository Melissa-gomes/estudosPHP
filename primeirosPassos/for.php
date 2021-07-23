<?php

for ($index = 1; $index <= 15; $index ++) {
    if($index == 13){
      continue;
    }
    echo "$index" . PHP_EOL;
}

#continue pula a iteração que corresponde a condicional dentro do for, o break para a funçao do for