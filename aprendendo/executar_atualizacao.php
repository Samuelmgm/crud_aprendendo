<?php
  include 'conexao.php';

$executar = 'UPDATE aluno SET nome="'.$_POST["nome_name"].'",
nota ="'.$_POST["nota_name"].'" WHERE aluno_id= ' .$_POST["id"];

$resultado = mysqli_query($conexao,$executar) or die ("query failed:".mysqli_error());

mysqli_close($conexao);

echo "ATUALIZADO COM SUCESSO!!!";

?>
<a href="index.php">Voltar</a>