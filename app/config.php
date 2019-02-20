<?php
$dsn = "mysql:dbname=".getenv("MYSQL_DATABASE")."; host=".getenv("HOST");
$dbuser = getenv("MYSQL_USER");
$dbpass = getenv("MYSQL_PASSWORD");

try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);

}catch(PDOException $e){
    echo "ERRO ".$e->getMessage();
}
