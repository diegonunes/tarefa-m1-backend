<?php

  // Crie um programa que calcule e mostre os números primos entre 0 e 200,
  // apresentando ao final a soma destes números;
  $numerosPrimos = array();
  $primo = false;
  for ($i=2; $i <= 200; $i++) {
    $primo = true;
    for ($j=2; $j <= ($i / 2); $j++) {
      if ($i % $j == 0) {
        $primo = false;
        break;
      }
    }
    if ($primo) {
      echo $i . ' ';
      array_push($numerosPrimos, $i);
    }
  }
  echo "\nA soma dos números primos entre 0 e 200 é: " . array_sum($numerosPrimos);

?>
