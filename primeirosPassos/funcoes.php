<?php

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
    echo $mensagem . '<br />';
}

// esse & antes de um parametro significa que eu estou recendo uma referencia ao real valor dos meus dados e não apenas uma cópia.

function titularWithNameUpper (array &$conta) {
    $conta['titular'] = strtoupper($conta['titular']);
}

//porem passagem com valor é mais seguro do que por referencia pois o seu banco de dados fica vulneralvel a possiveis erros.

function exibirConta (array $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular . Saldo: $saldo</li>";
}