<?php

require_once 'funcoes.php';

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


// $contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 18.10);
// $contasCorrentes['123.444.789-10'] = sacar($contasCorrentes['123.444.789-10'], 500);
// $contasCorrentes['123.444.789-10'] = depositar($contasCorrentes['123.444.789-10'], 20);


// unset é uma função usada para apagar um registro do banco de dados do php
unset ($contasCorrentes['123.444.789-10']);

titularWithNameUpper($contasCorrentes['123.456.789-10']);

/*foreach($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibirMensagem("$cpf - $titular: $saldo");
}*/

/*echo "<ul>";
foreach($contasCorrentes as $cpf => $conta) {
    exibirConta($conta);
}
echo "</ul>";*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes aqui</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>
                <h4><?= $conta['saldo']; ?></h4>
            </dd>
        <?php } ?>
    </dl>
</body>
</html>