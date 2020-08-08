<?php

  // b) Preencha uma matriz do tipo float de 5 colunas e 4 linhas com
  // valores aleatórios entre 10 e 30. Em seguida descubra e apresente
  // o maior e o menor valor presente nesta matriz.

  $matriz5por4 = array(array());
  for ($i=0; $i < 5; $i++) {
    for ($j=0; $j < 4; $j++) {
      $matriz5por4[$i][$j] = mt_rand(10 * 10, 30 * 10) / 10;
    }
  }

  // print_r($matriz5por4);
  $min = 30;
  $max = 0;

  for ($i=0; $i < 5; $i++) {
    for ($j=0; $j < 4; $j++) {
      if ($matriz5por4[$i][$j] < $min) {
        $min = $matriz5por4[$i][$j];
      } else if ($matriz5por4[$i][$j] > $max) {
        $max = $matriz5por4[$i][$j];
      }
    }
  }

  echo "Menor número: " . $min . "\n";
  echo "Maior número: " . $max;

?>
