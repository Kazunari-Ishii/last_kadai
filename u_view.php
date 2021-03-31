<?php
session_start();
include("funcs.php");
loginCheck();

$id = $_GET["id"];

try {
  $pdo = new PDO('mysql:dbname=gs_user_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。' . $e->getMessage());
}

$sql = "SELECT * FROM c_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//４．データ表示
$view = "";
if ($status == false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:" . $error[2]);
} else {
  $row = $stmt->fetch();
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>単語帳アプリ　更新画面</title>
  <link rel='stylesheet' href='css/reset.css'>
  <link rel='stylesheet' href='css/style3.css'>
  <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="select.php"></a></div>
      </div>
    </nav>
    <h1>更新</h1>
  </header>

  <main>
    <div class="f-container">
      <div>
        <form method="post" action="update.php">
          <div class="jumbotron">
            <fieldset>
              <legend>言葉と意味を変更して下さい。</legend><br>
              <label>品詞：<select name="part_of_speech">
                  <option value="<?= $row["part_of_speech"] ?>" selected><?= $row["part_of_speech"] ?></option>
                  <option value="名詞">名詞</option>
                  <option value="代名詞">代名詞</option>
                  <option value="動詞">動詞</option>
                  <option value="形容詞">形容詞</option>
                  <option value="副詞">副詞</option>
                  <option value="助動詞">助動詞</option>
                  <option value="前置詞">前置詞</option>
                  <option value="冠詞">冠詞</option>
                  <option value="接続詞">接続詞</option>
                  <option value="間投詞">間投詞</option>
                </select><br><br>
                <label>言葉：<input type="text" name="word" value="<?= $row["word"] ?>"></label><br><br>
                <label>意味：<textArea name="meaning" rows="4" cols="40"><?= $row["meaning"] ?></textArea></label><br><br>
                <input type="hidden" name="id" value="<?= $row["id"] ?>">
                <p><span>※未入力の項目があると単語帳画面に飛ばされます！</span></p>
                <input id="button1" type="submit" value="更新">
            </fieldset>
          </div>
        </form>
      </div>
    </div>
  </main>

  <footer>
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="select.php">単語帳へ</a>
            <a class="navbar-brand" href="logout.php">ログアウト</a>
          </div>
        </div>
      </nav>
    </header>
  </footer>
</body>

</html>