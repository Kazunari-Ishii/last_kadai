<?php
session_start();
include("funcs.php");
loginCheck();

$id = $_POST["id"];
$part_of_speech = $_POST["part_of_speech"];
$word = $_POST["word"];
$meaning = $_POST["meaning"];

if ($part_of_speech === "" || $word === "" || $meaning === "") {
    header("Location: select.php");
    exit;
}

try {
    $pdo = new PDO('mysql:dbname=gs_user_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DbConnectError:' . $e->getMessage());
}

$stmt = $pdo->prepare("UPDATE c_table SET part_of_speech=:part_of_speech, word=:word, meaning=:meaning WHERE id=:id");
$stmt->bindValue(':part_of_speech', $part_of_speech, PDO::PARAM_STR);
$stmt->bindValue(':word', $word, PDO::PARAM_STR);
$stmt->bindValue(':meaning', $meaning, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    exit("QueryError:" . $error[2]);
} else {
    header("Location: select.php");
    exit;
}
