<?php
session_start();
include("funcs.php");
$pdo = db_connect();

unset($_SESSION['flg']);
unset($_SESSION['flg2']);

if (empty($_POST['part_of_speech']) || empty($_POST['word']) || empty($_POST['meaning'])) {
    $_SESSION['flg'] = "必須項目が未入力です。";
    header('Location: registration.php');
    exit;
}

$part_of_speech = $_POST["part_of_speech"];
$word = $_POST["word"];
$meaning = $_POST["meaning"];

if ($part_of_speech === "" || $word === "" || $meaning === "") {
    header("Location: validate1.php");
    exit;
}

$stmt = $pdo->prepare("INSERT INTO c_table(id, part_of_speech, word, meaning, indate )VALUES(NULL, :a1, :a2, :a3, sysdate())");
$stmt->bindValue(':a1', $part_of_speech, PDO::PARAM_STR);
$stmt->bindValue(':a2', $word, PDO::PARAM_STR);
$stmt->bindValue(':a3', $meaning, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    exit("QueryError:" . $error[2]);
} else {
    header("Location: registration.php");
    exit;
}
