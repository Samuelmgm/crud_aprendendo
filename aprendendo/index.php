<?php
$nome ="";
$nota ="";
$id = "";
$id = isset($_GET["id"])? $_GET["id"]: null;
$action = "inserir_dados.php";

if(isset($_GET["action"]) and $_GET["action"]=="update"){
    include "atualizar.php";
    $action = "executar_atualizacao.php";
}



print_r($_POST);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>Aprendendo</title>
</head>

<body>
    <fieldset>
        <legend>Aluno</legend>
        <form action="<?= $action?>"method="post">
            <label for="nome_id">Digite seu nome</label>
            <input type="text" id="nome_id" name="nome_name" value="<?php echo $nome; ?>">
            <label for="nota_id">Digite sua nota</label>
            <input type="number" id="nota_id" name="nota_name" value="<?php echo $nota; ?>">
            <?php
            if($id!=''){?>
                <input type="hidden" value="<?php echo $id?>" name = "id">
                <?php
            }
            ?>
            <button type="submit">enviar</button>
        </form>
    </fieldset>
    <div>
        <?php
            include 'lista.php';
        ?>
    </div>

</body>

</html>