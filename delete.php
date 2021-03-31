<?php
$id = $_GET["id"];

try {
    $pdo = new PDO('mysql:dbname=gs_user_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('データベースに接続できませんでした。' . $e->getMessage());
}

$sql = "DELETE FROM c_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

$view = "";
if ($status == false) {
    $error = $stmt->errorInfo();
    exit("ErrorQuery:" . $error[2]);
} else {
    header("Location: select.php");
}
