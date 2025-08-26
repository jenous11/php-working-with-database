<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
$firtname=$_POST["firtname"];
$lastname=$_POST["lastname"];

require_once "db.php";
try{
    $sql="DELETE FROM guest where firtname=:firtname AND lastname=:lastname;";
    $stmt=$pdo->prepare($sql);

    $stmt->bindParam(":firtname",$firtname);
    $stmt->bindParam(":lastname",$lastname);

    $stmt->execute();
     
    $pdo=  null;
    $stmt= null;

    header("Location: ../deletedata.php");
    die();

}
catch(PDOException $e){
echo "error: ".$e->getMessage();
}
}
else{
    header("Location: ../deletedata.php");
}