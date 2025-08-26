<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$firtname=$_POST["firtname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];

require_once "db.php";
try{

$sql="UPDATE guest SET firtname=:firtname,lastname=:lastname, email=:email WHERE guest_no = 7;";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(":firtname",$firtname);
$stmt->bindParam(":lastname",$lastname);
$stmt->bindParam(":email",$email);
$stmt->execute();

$stmt= null;
$pdo=  null;

header("Location: ../updatedata.php");
die();
}

catch(PDOException $e){

echo"erro: ".$e->getMessage();

}
}else{
header("Location: ../updatedata.php");
}