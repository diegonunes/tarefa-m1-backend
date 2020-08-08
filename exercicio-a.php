<?php

  // Inicialize um vetor de 20 inteiros com valores sorteados entre 0 e 100;
  // em seguida, some todos elementos deste vetor e apresente o resultado.

  $arrayInteiros = array();
  for ($i=0; $i < 20; $i++) {
    $arrayInteiros[$i] = mt_rand(0,100);
  }
  // print_r($arrayInteiros);
  $somaArray = array_sum($arrayInteiros);
  echo "A soma dos números é: " . $somaArray;

?>
