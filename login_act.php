<?php
session_start();
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

//1.  DB接続します xxxにDB名を入れます
try {
  $pdo = new PDO('mysql:dbname=gs_user_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。' . $e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE u_id=:lid AND u_pw=:lpw");
$stmt->bindValue(':lid', $lid);
$stmt->bindValue(':lpw', $lpw);
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:" . $error[2]);
}

$val = $stmt->fetch();

if ($val["id"] != "") {
  $_SESSION["chk_ssid"] = session_id();
  $_SESSION["u_name"] = $val['u_name'];
  header("Location: select.php");
} else {
  header("Location: index.php");
}
exit();
