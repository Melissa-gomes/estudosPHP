<?php

$peso = 78;
$altura = 1.75;

$imc = $peso / $altura ** 2;

if ($imc < 18.5) {
  echo "Seu imc é de $imc e você está: Abaixo do peso";
} else if ($imc >= 18.5 && $imc <= 24.9) {
  echo "Seu imc é de $imc e você está: No seu peso normal";
} else if ($imc >= 25 && $imc <= 29.9) {
  echo "Seu imc é de $imc e você está: Com sobrepeso";
} else if ($imc >= 30 && $imc <= 34.9) {
  echo "Seu imc é de $imc e você está: Com obesidade grau 1";
} else if ($imc >= 35 && $imc <= 39.9) {
  echo "Seu imc é de $imc e você está: Com obesidade grau 2";
} else {
  echo "Seu imc é de $imc e você está: Com obesidade grau 3 ou morbida";
}