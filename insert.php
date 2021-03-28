<?php
//1. POSTデータ取得
$part_of_speech = $_POST["part_of_speech"];
$word = $_POST["word"];
$meaning = $_POST["meaning"];

//2. DB接続
try {
    $pdo = new PDO('mysql:dbname=c_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DbConnectError:' . $e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO c_table(id, part_of_speech, word, meaning, indate )VALUES(NULL, :a1, :a2, :a3, sysdate())");
$stmt->bindValue(':a1', $part_of_speech, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $word, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $meaning, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:" . $error[2]);
} else {
    //５．select.phpへリダイレクト
    header("Location: select.php");
    exit;
}
