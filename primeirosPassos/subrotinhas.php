<?php

$contasCorrentes = [
    '123.456.789-10' => [
      'titular' => 'Melissa',
      'saldo' => 1000
    ],
    '123.444.789-10' => [
      'titular' => 'Andy',
      'saldo' => 300
    ],
    '123.666.789-10' => [
      'titular' => 'Camila',
      'saldo' => 9000
    ]
];

// Quando explicitamos o tipo, aumentamos a segurança do código e facilitamos a procura por erros.

function sacar (array $conta, float $valorASacar) : array
{
    if($valorASacar > $conta['saldo']) {
        exibirMensagem('Você não pode sacar esse valor pois esse valor é maior do que tem disponivel na sua conta');
    } else {
        $conta['saldo'] -= $valorASacar;
        exibirMensagem("Valor do Saque: $valorASacar, Saldo Atual: " . $conta['saldo']);
    }
    return $conta;
}

function depositar (array $conta, float $valorADepositar) : array
{
    if($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
        exibirMensagem("Valor do Deposito: $valorADepositar, Saldo Atual: " . $conta['saldo']);
        return $conta;
    } else {
        exibirMensagem("Valores de deposito devem ser positivos");
    }
    
}

function exibirMensagem(string $mensagem) {
    echo $mensagem . PHP_EOL;
}

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 18.10);
// $contasCorrentes['123.444.789-10'] = sacar($contasCorrentes['123.444.789-10'], 500);
$contasCorrentes['123.444.789-10'] = depositar($contasCorrentes['123.444.789-10'], 20);

foreach($contasCorrentes as $cpf => $conta) {
    exibirMensagem("$cpf - {$conta['titular']}: {$conta['saldo']}");
}