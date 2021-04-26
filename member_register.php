<?php
session_start();
include("funcs.php");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>単語帳アプリ　会員登録画面</title>
    <link rel='stylesheet' href='css/reset.css'>
    <link rel='stylesheet' href='css/style3.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php"></a></div>
            </div>
        </nav>
        <h1>新規会員登録</h1>
    </header>

    <main>
        <div class="f-container">
            <div>
                <form method="post" action="member_register_insert.php">
                    <div class="jumbotron">
                        <fieldset>
                            <legend>ここに名前とIDとパスワードを入力して下さい。</legend><br>
                            <label>名前：<input type="text" name="una" value=""></label><br><br>
                            <label>ID：<input type="text" name="lid" value=""></label><br><br>
                            <label>パスワード：<input type="text" name="lpw" value=""></label>
                            <input id="button1" type="submit" value="登録">
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
                        <a class="navbar-brand" href="index.php">ログイン画面へ</a>
                    </div>
                </div>
            </nav>
        </header>
    </footer>
</body>

</html>