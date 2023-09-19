<?php

  // incluir a conexao
  include("conexao.php");

  //Sql
  $sql = "SELECT * FROM cursos";

  //Executar
  $executar = mysqli_query($conexao, $sql);

  //Vetor
  $cursos = [];

  //Índice
  $indice = 0;

  //Laço
  while($linha = mysqli_fetch_assoc($executar)){                  //Enquanto a linha no banco de dados execute >>
    $cursos[$indice]['idCurso'] = $linha['idCurso'];    //curso, id do curso na linha idCurso. esse laço de repetição sera executado no banco de dados
    $cursos[$indice]['nomeCurso'] = $linha['nomeCurso'];
    $cursos[$indice]['valorCurso'] = $linha['valorCurso'];

    $indice++;
  }

  //JSON
  json_encode(['cursos'=> $cursos]);

?>
