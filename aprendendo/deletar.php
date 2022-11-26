<?php
include 'conexao.php';

$deletar = 'DELETE FROM aluno WHERE aluno_id ='.$_GET["id"];

$resultado = mysqli_query($conexao,$deletar) or die ('QUERY FAILED:'.mysqli_error());
mysqli_close($conexao);

echo "DELETADO COM SUCESSO!!!";
?>
<a href="index.php">voltar</a>
