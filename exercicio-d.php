<?php

  // Elabore um programa que leia os seguintes dados de 5 usuários:
  //  nome, sobrenome, idade e CPF.
  // Por fim, mostre os dados (de cada usuário) ordenados pela idade;
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome1 = $_POST['nome1'];
    $sobrenome1 = $_POST['sobrenome1'];
    $idade1 = $_POST['idade1'];
    $cpf1 = $_POST['cpf1'];
    $nome2 = $_POST['nome2'];
    $sobrenome2 = $_POST['sobrenome2'];
    $idade2 = $_POST['idade2'];
    $cpf2 = $_POST['cpf2'];
    $nome3 = $_POST['nome3'];
    $sobrenome3 = $_POST['sobrenome3'];
    $idade3 = $_POST['idade3'];
    $cpf3 = $_POST['cpf3'];
    $nome4 = $_POST['nome4'];
    $sobrenome4 = $_POST['sobrenome4'];
    $idade4 = $_POST['idade4'];
    $cpf4 = $_POST['cpf4'];
    $nome5 = $_POST['nome5'];
    $sobrenome5 = $_POST['sobrenome5'];
    $idade5 = $_POST['idade5'];
    $cpf5 = $_POST['cpf5'];
  }

  $usuarios = [
    "usuario1" => [
      "nome" => $nome1,
      "sobrenome" => $sobrenome1,
      "idade" => $idade1,
      "CPF" => $cpf1
    ],
    "usuario2" => [
      "nome" => $nome2,
      "sobrenome" => $sobrenome2,
      "idade" => $idade2,
      "CPF" => $cpf2
    ],
    "usuario3" => [
      "nome" => $nome3,
      "sobrenome" => $sobrenome3,
      "idade" => $idade3,
      "CPF" => $cpf3
    ],
    "usuario4" => [
      "nome" => $nome4,
      "sobrenome" => $sobrenome4,
      "idade" => $idade4,
      "CPF" => $cpf4
    ],
    "usuario5" => [
      "nome" => $nome5,
      "sobrenome" => $sobrenome5,
      "idade" => $idade5,
      "CPF" => $cpf5
    ],
  ];

  foreach ($usuarios as $key => $value) {
    $idade[$key] = $value['idade'];
  }
  array_multisort($idade, SORT_ASC, $usuarios);
  var_dump($usuarios);

?>
