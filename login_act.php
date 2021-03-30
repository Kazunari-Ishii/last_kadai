<?php
session_start();
include("funcs.php");
$pdo = db_connect();

if (strlen($_POST['lid']) > 10 || strlen($_POST['lpw']) > 10) {
  echo "文字数がオーバーしています。";
  header("Location: validate_b.php");
  exit;
} elseif (empty($_POST['lid']) || empty($_POST['lpw'])) {
  header("Location: validate_c.php");
  exit;
}

$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE u_id=:lid AND u_pw=:lpw");
$stmt->bindValue(':lid', $lid);
$stmt->bindValue(':lpw', $lpw);
$status = $stmt->execute();

$view = "";
if ($status == false) {
  $error = $stmt->errorInfo();
  exit("ErrorQuery:" . $error[2]);
}

$val = $stmt->fetch();

if ($val["id"] != "") {
  $_SESSION["chk_ssid"] = session_id();
  $_SESSION["u_name"] = $val['u_name'];
  header("Location: select.php");
} else {
  header("Location: validate_a.php");
}
exit();
