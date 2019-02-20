<?php
include('cabecalho.php');
include('config.php');
$id = addslashes($_GET['id']);
$sql = "delete from usuarios where id ='$id'";
$pdo->query($sql);

header("Location: index.php");
