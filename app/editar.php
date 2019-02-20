<?php
include('cabecalho.php');
include('config.php');

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = addslashes($_GET['id']);
}

if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);

    $sql = "UPDATE usuarios set nome='$nome', email='$email' where id =$id;";
    $pdo->query($sql);
    header("Location: index.php");
}

$sql = "SELECT * from usuarios where id = '$id';";
$sql = $pdo->query($sql);

if($sql->rowCount()>0){
    $dado = $sql->fetch();
}else {
    header("Location: index.php");
}
?>
<body>
    <form action="editar.php?id=<?=$id?>" method="post">
        Nome:
        <br><br>
        <input type="text" name="nome" value="<?= $dado['nome'] ?>" autofocus>
        <br> <br>
        E-mail:
        <br><br>
        <input type="email" name="email" value="<?= $dado['email'] ?>" >
        <br><br>
        <input type="submit">
    </form>

    <p> <a href="index.php">Voltar</a> </p>
</body>
