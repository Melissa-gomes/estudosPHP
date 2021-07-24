<?php

#array associativo
$conta1 = [
  'nome' => 'Melissa',
  'saldo' => 7000
];

$conta2 = [
  'nome' => 'Andy',
  'saldo' => 20000
];

$conta3 = [
  'nome' => 'Camila',
  'saldo' => 12000
];

#echo $conta1['nome'];

$contas = [ $conta1, $conta2, $conta3 ];

for ( $i = 0; $i < count($contas); $i += 1) {
  echo $contas[$i]['nome'] .PHP_EOL;
}