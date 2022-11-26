<?php
include "conexao.php";

$id = $_GET["id"];
$action = "execute-update";

$select = 'SELECT nome,nota FROM aluno WHERE aluno_id= '.$_GET["id"];
$resultado = mysqli_query($conexao,$select) or die ("query failed:".mysqli_error());
$coluna = mysqli_fetch_row($resultado);
mysqli_close($conexao);

print_r($coluna);
$nome = $coluna[0];
$nota = $coluna[1];

?>
