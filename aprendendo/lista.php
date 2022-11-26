<html>

<head>
</head>

<body>
    <table>
        <thead>
            <th>Nome</th>
            <th>Nota</th>
            <th>Ações</th>

        </thead>
        <tbody>
            <?php
            include 'conexao.php';
            $selecionar = 'SELECT * FROM aluno';
            $resultado = mysqli_query($conexao,$selecionar) or die ('query failed:'.mysqli_error());

            while($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
                ?>
                <tr>
                    <td><?=$linha["nome"]?></td>
                    <td><?=$linha["nota"]?></td>
                    <td><a href="deletar.php?id=<?=$linha["aluno_id"]?>&action=delete"> DELETAR</a></td>
                    <td><a href="index.php?id=<?=$linha["aluno_id"]?>&action=update"> UPDATE</a></td>

                </tr>
                <?php
                 }
                  mysqli_close($conexao);
                ?>
        </tbody>
    </table>
</body>

</html>