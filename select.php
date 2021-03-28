<?php
session_start();
include("funcs.php");
loginCheck();
$pdo = db_connect();

$stmt = $pdo->prepare("SELECT * FROM c_table");
$status = $stmt->execute();

$view = "";
if ($status == false) {
  $error = $stmt->errorInfo();
  exit("ErrorQuery:" . $error[2]);
} else {
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $view .= '<div class="f-item1">';
    $view .= $result["id"];
    $view .= '</div>';
    $view2 .= '<div class="f-item2">';
    $view2 .= $result["part_of_speech"] . ":" . $result["word"];
    $view2 .= '</div>';
    $view3 .= '<div class="f-item2">';
    $view3 .= $result["meaning"];
    $view3 .= '</div>';
    $view4 .= '<div class="f-item1">';
    $view4 .= $result["indate"];
    $view4 .= '</div>';
  }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>単語帳アプリ　単語帳画面</title>
  <link rel='stylesheet' href='css/reset.css'>
  <link rel='stylesheet' href='css/style2.css'>
  <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body id="main">
  <!-- Head[Start] -->
  <header>
    <h1>単語帳</h1>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="registration.php">登録画面へ</a>
          <a class="navbar-brand" href="logout.php">ログアウト</a>
        </div>
      </div>
    </nav>
  </header>
  <!-- Head[End] -->

  <!-- Main[Start] $view-->
  <div class="f-container">
    <button id="hide" style="width:100px;height:50px;cursor:pointer">言葉を隠す</button>
    <button id="show" style="width:100px;height:50px;cursor:pointer">言葉を表示</button>
    <button id="hide2" style="width:100px;height:50px;cursor:pointer">意味を隠す</button>
    <button id="show2" style="width:100px;height:50px;cursor:pointer">意味を表示</button>
  </div>

  <div class="f-container">
    <div>
      <div><?= $view ?></div>
    </div>
    <div>
      <div id="output"><?= $view2 ?></div>
    </div>
    <div>
      <div id="output2"><?= $view3 ?></div>
    </div>
    <div>
      <div><?= $view4 ?></div>
    </div>
  </div>

  <button id="delete" style="width:100px;height:50px;cursor:pointer">削除</button>

  <!-- Main[End] -->
  <script>
    // 隠したり、表示したりするボタン
    $("#hide").on("click", function() {
      $("#output").hide();
    })
    $("#show").on("click", function() {
      $("#output").show();
    })
    $("#hide2").on("click", function() {
      $("#output2").hide();
    })
    $("#show2").on("click", function() {
      $("#output2").show();
    })

    $("#delete").on("click", function() {
      $("#output").empty();
      $("#output2").empty();
    })
  </script>
</body>

</html>