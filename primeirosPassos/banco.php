<?php

$contasCorrentes = [
  '123.456.789-10' => [
    'titular' => 'Melissa',
    'saldo' => 10000
  ],
  '123.444.789-10' => [
    'titular' => 'Andy',
    'saldo' => 24000
  ],
  '123.666.789-10' => [
    'titular' => 'Camila',
    'saldo' => 9000
  ]
];

$contasCorrentes['123.456.789-10']['saldo'] -= 500;
if( 10000 > $contasCorrentes['123.666.789-10']['saldo']) {
  echo "voce não pode sacar esse valor pois ele é maior do disponivel na sua conta" .PHP_EOL;
} else {
  $contasCorrentes['123.666.789-10']['saldo'] -= 10000;
}

foreach($contasCorrentes as $cpf => $conta) {
  echo $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}


