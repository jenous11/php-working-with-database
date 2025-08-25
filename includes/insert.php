<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firtname = $_POST["firtname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];

    try {
        require_once "db.php";

        $sql = "INSERT INTO  guest(firtname,lastname,email) VALUES (:firtname,:lastname,:email);";

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(":firtname", $firtname);
        $stmt->bindParam(":lastname", $lastname);
        $stmt->bindParam(":email", $email);

        $stmt->execute();
        $stmt = null;
        $pdo = null;

        header("location ../guest.php");
        die();
    } catch (PDOException $e) {
        die("error: " . $e->getMessage());
    }
} else {
    header("location ../guest.php");
}
