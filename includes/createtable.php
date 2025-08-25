<?php
require_once "db.php";

try{
$sql = "CREATE TABLE Guest(
guest_no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firtname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(30),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$pdo->exec($sql);
echo "table myguest created successfully";
}
catch(PDOException $e){
    echo "error".$e->getMessage();
}
$pdo=null;