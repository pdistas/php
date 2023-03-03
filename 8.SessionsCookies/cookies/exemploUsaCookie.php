<?php

  if (!isset($_COOKIE['Nome'])) {

      $msg = "Você não é cadastrado em nosso site! Para ter acesso ao conteúdo exclusivo do assinante, <a href='cadastra.php'>clique aqui !</a>";

  } else {

      $nome = $_COOKIE["Nome"];
      $idade = $_COOKIE["Idade"];
      $contaVisitas = $_COOKIE["contaVisitas"];

      if ($idade < 18) {

          $msg = "<span style='color:red;'>Você não tem idade para acessar esse site!</span>";

      } else {

          $cor = $_COOKIE["Cor"];

          if ($contaVisitas > 0) {
              $msg = "Olá " . $nome . "! Bem vindo de volta ao nosso site ...";
          } else {
              $msg = "Olá " . $nome . "! Bem vindo ao nosso site ...";
              $contaVisitas++;
              setcookie("contaVisitas", $contaVisitas, time()+3600, "/");
          }
      }

  }

  ?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>

<body style="background-color: <?= $cor ?> ">

  <?= $msg ?>

</body>
</html>