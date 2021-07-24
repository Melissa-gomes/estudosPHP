<?php

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

$contas = [ 
  12345678910 => $conta1,
  12345578910 => $conta2,
  10045678910 =>$conta3 
];

foreach ($contas as $cpf => $conta) {
  echo $cpf .PHP_EOL;
}