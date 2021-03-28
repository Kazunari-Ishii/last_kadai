<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>単語帳アプリ　登録画面</title>
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
        <h1>登録画面</h1>
    </header>

    <main>
        <div class="f-container">
            <div>
                <form method="post" action="insert.php">
                    <div class="jumbotron">
                        <fieldset>
                            <legend>ここに言葉と意味を入力して下さい。</legend><br>
                            <label>品詞：<select name="part_of_speech">
                                    <option value="" selected>品詞</option>
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
                                <label>単語：<input type="text" name="word" value=""></label><br><br>
                                <label>意味：<textArea name="meaning" rows="4" cols="40"></textArea></label><br><br>
                                <input id="button1" type="submit" value="登録">
                        </fieldset>
                    </div>
                </form>
            </div>
            <div>
                <img class="sermon" src="img/il04a-500.png" alt="" style="display: none;">
                <img class="sermon2" src="img/il04a-500.png" alt="" style="display: none;">
                <img class="sermon3" src="img/il04a-500.png" alt="" style="display: none;">
                <img class="sermon4" src="img/il04a-500.png" alt="" style="display: none;">
                <img class="sermon5" src="img/il04a-500.png" alt="" style="display: none;">
                <img class="orca" src="img/il06a-500.png" alt="" style="display: none;">
                <img class="bear" src="img/il09.png" alt="" style="display: none;">
            </div>
        </div>
    </main>

    <footer>
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="select.php">単語帳へ</a>
                        <a class="navbar-brand" href="index.php">ログアウト</a>
                    </div>
                </div>
            </nav>
        </header>
    </footer>

    <script>
        //スタンプが増える仕組み
        let i = 0;

        $("#button1").on("click", function() {
            i++;
            if (i == 1) {
                $(".sermon").fadeIn();
            } else if (i == 2) {
                $(".sermon2").fadeIn();
            } else if (i == 3) {
                $(".sermon3").fadeIn();
            } else if (i == 4) {
                $(".sermon4").fadeIn();
            } else if (i == 5) {
                $(".sermon5").fadeIn();
                $(".sermon").fadeOut();
                $(".sermon2").fadeOut();
                $(".sermon3").fadeOut();
                $(".sermon4").fadeOut();
                $(".sermon5").fadeOut();
                $(".orca").fadeIn(2000);
            } else if (i == 6) {
                $(".sermon").fadeIn();
            } else if (i == 7) {
                $(".sermon2").fadeIn();
            } else if (i == 8) {
                $(".sermon3").fadeIn();
            } else if (i == 9) {
                $(".sermon4").fadeIn();
            } else if (i == 10) {
                $(".sermon5").fadeIn();
                $(".sermon").fadeOut();
                $(".sermon2").fadeOut();
                $(".sermon3").fadeOut();
                $(".sermon4").fadeOut();
                $(".sermon5").fadeOut();
                $(".orca").fadeOut();
                $(".bear").fadeIn(2000);
            }
        });
    </script>

</body>

</html>