<?php 
    include('cabecalho.php');
    include('config.php');
?>
    <body>
        <table width="100%" border="0px">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
            <?php
                $sql = "select * from usuarios";
                $sql = $pdo->query($sql);
                if($sql->rowCount() > 0):
                    foreach($sql->fetchAll() as $users):
            ?>
            <tr align="center">
                <td><?= $users['nome'] ?></td>
                <td><?= $users['email'] ?></td>
                <td>
                    <a href="editar.php?id=<?= $users['id'] ?>">
                        Editar </a> ||
                    <a href="excluir.php?id=<?=$users['id']?>">
                        Excluir</a>
                </td>
            </tr>
            <?php
                    endforeach;
                endif;
             ?>
        </table>
        <br><br><br>
        <a href="form.html">
            <button type="submit" href="form.html">
                Cadastrar novo usuarios
            </button>
        </a>
    </body>
</html>
