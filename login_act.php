<?php
session_start();
include("funcs.php");
$pdo = db_connect();

unset($_SESSION['flg']);
unset($_SESSION['flg2']);

if (strlen($_POST['lid']) > 10 || strlen($_POST['lpw']) > 10) {
  $_SESSION['flg'] = "aaa";
  header('Location: index.php');
  exit;
} elseif (empty($_POST['lid']) || empty($_POST['lpw'])) {
  $_SESSION['flg2'] = "bbb";
  header("Location: index.php");
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
  header('Location: index.php');
}
exit();
