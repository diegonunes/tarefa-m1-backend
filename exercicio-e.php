<?php

  // Crie um programa que informe quantas letras, digitos e palavras estão presentes
  // na string "Na preparação para a final da Copa do Mundo, a França está em ritmo de
  // recuperação física depois da semifinal contra a Bélgica. Nesta quinta-feira
  // (12/julho/2018), 5 jogadores sequer foram a campo".

  $string = "Na preparação para a final da Copa do Mundo, a França está em ritmo de recuperação física depois da semifinal contra a Bélgica. Nesta quinta-feira (12/julho/2018), 5 jogadores sequer foram a campo";

  $letras = 0;

  foreach (count_chars($string, 1) as $i => $val) {
    if ($val != " ") {
      $letras = $letras + $val;
    }
  }

  echo $letras;

?>
