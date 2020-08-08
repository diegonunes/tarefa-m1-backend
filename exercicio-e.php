<?php

  // Crie um programa que informe quantas letras, digitos e palavras estão presentes
  // na string "Na preparação para a final da Copa do Mundo, a França está em ritmo de
  // recuperação física depois da semifinal contra a Bélgica. Nesta quinta-feira
  // (12/julho/2018), 5 jogadores sequer foram a campo".

  $string = "Na preparação para a final da Copa do Mundo, a França está em ritmo de recuperação física depois da semifinal contra a Bélgica. Nesta quinta-feira (12/julho/2018), 5 jogadores sequer foram a campo";

  $letras = str_split($string);
  $qtdLetras = 0;
  foreach ($letras as $key => $value) {
    if ($value != " ") {
      $qtdLetras++;
    }
  }
  echo "Total de letras: " . $qtdLetras;
  echo "\nTotal de dígitos: " . count(array_filter($letras, 'is_numeric'));
  $palavras = explode(" ", $string);
  echo "\nTotal de palavras: " . count($palavras);

?>
