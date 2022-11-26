<?php

$nome = isset($_POST["nome_name"])? $_POST["nome_name"]: null;

$nota = isset($_POST["nota_name"])? $_POST["nota_name"]: null;

if($nome!="" and $nota!=""){
    include 'conexao.php';

    $insert ='INSERT INTO aluno(nome,nota) VALUES("'.$nome.'","'.$nota.'")';

    $resultado = mysqli_query($conexao,$insert) or die ('query failed:' .mysqli_error(die));

    mysqli_close($conexao);

    echo "CADASTRO EFETUADO";

} 
?>
<a href="index.php">voltar</a>