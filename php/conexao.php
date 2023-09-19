<?php

  //Variaveis
  $url = "localhost";
  $usuario = "root";
  $senha = "";
  $base = "api";

  //Conexao com o banco
  $conexao = mysqli_connect($url, $usuario, $senha, $base);

  //Arrumar caracteres especiais(problemas com acentuação)
mysqli_set_charset($conexao, "utf8");
