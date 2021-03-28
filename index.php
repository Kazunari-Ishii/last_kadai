<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>単語帳アプリ ログイン画面</title>
    <link rel='stylesheet' href='css/reset.css'>
    <link rel='stylesheet' href='css/style.css'>
    <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css">
</head>

<body>

    <header>単語帳アプリへようこそ！</header>

    <main>
        <div class="f-container">
            <div class="f-item">
                <form action="index.php" method="POST">
                    <p>ログインID：<input type="text" name="user_name1"></p>
                    <p>パスワード：<input type="password" name="password1"></p>
                    <input id="button1" type="submit" name="login" value="ログイン">
                </form>
                <?php
                session_start();

                if (isset($_POST["login"])) {

                    if ($_POST["user_name1"] == "ishii" && $_POST["password1"] == "pass") {
                        $_SESSION["user_name1"] = $_POST["user_name1"];
                        $login_success_url = "select.php";
                        header("Location: {$login_success_url}");
                        exit;
                    } elseif ($_POST["user_name1"] != "ishii" && $_POST["password1"] == "pass") {
                        echo "<span>IDかパスワードが間違っています！</span>";
                    } elseif ($_POST["user_name1"] == "isgii" && $_POST["password1"] != "pass") {
                        echo "<span>IDかパスワードが間違っています！</span>";
                    } else {
                        echo "<span>IDとパスワード両方が間違っています！</span>";
                    }
                }

                ?>
            </div>
        </div>
    </main>

    <footer></footer>
</body>

</html>