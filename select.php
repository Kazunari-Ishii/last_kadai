<?php
//1.  DB接続します xxxにDB名を入れます
try {
  $pdo = new PDO('mysql:dbname=c_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。' . $e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM c_table");
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:" . $error[2]);
} else {
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $view .= '<div class="f-item1">';
    $view .= $result["id"];
    $view .= '</div>';
    $view2 .= '<div class="f-item2">';
    $view2 .= $result["word"];
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
</head>

<body id="main">
  <!-- Head[Start] -->
  <header>
    <h1>単語帳</h1>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="registration.php">登録画面へ</a>
          <a class="navbar-brand" href="index.php">ログアウト</a>
        </div>
      </div>
    </nav>
  </header>
  <!-- Head[End] -->

  <!-- Main[Start] $view-->
  <div class="f-container">
    <div>
      <div><?= $view ?></div>
    </div>
    <div>
      <div><?= $view2 ?></div>
    </div>
    <div>
      <div><?= $view3 ?></div>
    </div>
    <div>
      <div><?= $view4 ?></div>
    </div>
  </div>
  <!-- Main[End] -->

</body>

</html>