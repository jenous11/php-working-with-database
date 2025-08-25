<?php

require_once  "db.php";

try{
    $sql="CREATE DATABASE IF NOT EXISTS DBBYPHP";    
    $pdo->exec($sql);
    echo"Database is created successfully";
}
catch(PDOException $e){
    echo "error creating datbase".$e->getMessage();
}