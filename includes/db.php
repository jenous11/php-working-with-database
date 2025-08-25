<?php
$dsn="mysql:host=localhost;dbname=dbbyphp";
$username="root";
$password="";

try{
$pdo= new pdo($dsn,$username,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
echo "the exeception is ".$e->getMessage();
}
