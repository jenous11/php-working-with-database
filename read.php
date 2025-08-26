<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $search=$_POST["search"];

    try{
     require_once "includes/db.php";
$sql="SELECT *FROM guest WHERE firtname=:search;";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(":search",$search);
$stmt->execute();

$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
$pdo=null;
$stmt=null;
 }
 catch(PDOException $e){
echo"error is due to : ".$e->getMessage();
 }
}
else{
    header("Location: ../read.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>

        <?php
    if(empty($result)){
        echo "<div>";
        echo "<p> there is nothing to search for </p>";
        echo "</div>";
    }
    else{
        foreach ($result as $row){
            
            echo "<div>";
            echo "<p>".htmlspecialchars($row["firtname"]) ."</p>";
            echo "<p>".htmlspecialchars($row["lastname"]) ."</p>";
            echo "<p>".htmlspecialchars($row["email"]) ."</p>";
            echo "</div>";
        }
    }
    ?>
</section>
</body>
</html>