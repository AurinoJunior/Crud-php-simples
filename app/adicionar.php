<?php
include('cabecalho.php');
include('config.php');
if(!empty($_POST['nome']) && isset($_POST['nome'])):
    $nome = addslashes($_POST["nome"]);
    $email = addslashes($_POST["email"]);

    $sql = "insert into usuarios set nome='$nome', email='$email';";
    $pdo->query($sql);
?>

    <h1>Usuario adicionado</h1>
    <p><a href='index.php'> Voltar para a home </a></p>

<?php else: ?>
    <center> <h2>Usuario nao adicionado</h2></center>
    <p><a href='index.php'> Voltar para a home </a></p>
<?php endif; ?>
