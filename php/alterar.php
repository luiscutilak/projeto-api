<?php

//Incluir a conexão
include("conexao.php");

//Obter dados abaixo criando variavel

$obterDados = file_get_contents("php://input");

//Extrair dados do JSON
$extrair = json_decode($obterDados);

//Separar os dados do JSON
$idCurso = $extrair->cursos->$idCurso;
$nomeCurso = $extrair->cursos->$nomeCurso;
$valorCurso = $extrair->cursos->$valorCurso;


//SQL
$sql = "UPDATE cursos SET nomeCurso='$nomeCurso', valorCurso=$valorCurso WHERE idCurso=$idCurso";
mysqli_query($conexao, $sql);

//Exportar os dados cadastrados

$curso = [
    'idCurso' => $idCurso,
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
];

json_encode(['curso'=>$curso]);


?>
