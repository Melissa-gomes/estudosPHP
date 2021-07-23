<?php

$idade = 26;
$acompanhado = true;

echo "Você pode entrar se tiver pelo menos 18 anos ou apartir de 16 anos se estiver acompanhado" . PHP_EOL;

// em php voce tanto pode usar o || quanto a paralavra or, para defifinir um comando
// em php voce tanto pode usar o && quanto a paralavra and, para defifinir um comando

if ($idade >= 18) {
    echo "Você tem $idade anos, pode entrar, divirta-se";
} else if ($idade >= 16 && $acompanhado) {
    echo "Você só tem $idade anos, mas está acompanhado, então pode entrar, divirta-se";
} else {
    echo "Você só tem $idade anos, não pode entra";
}