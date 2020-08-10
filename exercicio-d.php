<?php

  // Elabore um programa que leia os seguintes dados de 5 usuários:
  //  nome, sobrenome, idade e CPF.
  // Por fim, mostre os dados (de cada usuário) ordenados pela idade;
  $usuarios = [
    "usuario1" => [
      "nome" => "Diego",
      "sobrenome" => "Nunes",
      "idade" => "40",
      "CPF" => 12345678912
    ],
    "usuario2" => [
      "nome" => "João",
      "sobrenome" => "Nunes",
      "idade" => "57",
      "CPF" => 12345678912
    ],
    "usuario3" => [
      "nome" => "Maria",
      "sobrenome" => "Nunes",
      "idade" => "36",
      "CPF" => 12345678912
    ],
    "usuario4" => [
      "nome" => "Manuel",
      "sobrenome" => "Nunes",
      "idade" => "38",
      "CPF" => 12345678912
    ],
    "usuario5" => [
      "nome" => "Isabella",
      "sobrenome" => "Nunes",
      "idade" => "5",
      "CPF" => 12345678912
    ],
  ];

  foreach ($usuarios as $key => $value) {
    $idade[$key] = $value['idade'];
  }

  array_multisort($idade, SORT_ASC, $usuarios);
  print_r($usuarios);

?>
