<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/reset.css'>
    <link rel='stylesheet' href='css/style.css'>
    <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css">
    <title>単語帳アプリ ログイン失敗</title>
</head>

<body>

    <header>単語帳アプリへようこそ！</header>

    <main>
        <div class="f-container">
            <div class="f-item">
                <form method="post" action="login_act.php">
                    <div class="jumbotron">
                        <fieldset>
                            <input type="text" name="lid" placeholder="Username" autocomplete="off"><br>
                            <input type="password" name="lpw" placeholder="Password" autocomplete="off"><br>
                            <p><span>※文字数がオーバーしています！</span></p>
                            <input id="button1" type="submit" value="Sign in">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer></footer>
</body>

</html>