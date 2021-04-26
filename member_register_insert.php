<?php
session_start();
include("funcs.php");
$pdo = db_connect();

$una = $_POST["una"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

$stmt = $pdo->prepare("INSERT INTO gs_user_table(id, u_name, u_id, u_pw, indate)VALUES(NULL, :a1, :a2, :a3, sysdate())");
$stmt->bindValue(':a1', $una, PDO::PARAM_STR);
$stmt->bindValue(':a2', $lid, PDO::PARAM_STR);
$stmt->bindValue(':a3', $lpw, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    exit("QueryError:" . $error[2]);
} else {
    header("Location: member_register.php");
    exit;
}
