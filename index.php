<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/reset.css'>
    <link rel='stylesheet' href='css/style.css'>
    <title>単語帳アプリ ログイン画面</title>
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
                            <input type="password" name="lpw" placeholder="Password" autocomplete="off"><br><br>
                            <span>
                                <?php
                                session_start();
                                echo $_SESSION['flg'];
                                echo $_SESSION['flg2'];
                                echo $_SESSION['flg3'];
                                ?>
                            </span><br>
                            <input id="button1" type="submit" value="Sign in">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="member_register.php">会員登録</a>
                </div>
            </div>
        </nav>
    </footer>

</body>

</html>