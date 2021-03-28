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
        <form method="post" action="insert.php">
            <div class="jumbotron">
                <fieldset>
                    <legend>ここにあなたが見た鳥の情報を入力して下さい。</legend><br>
                    <div class="season">
                        <th>季節：</th>
                        <td>
                            <ul class="season">
                                <li>
                                    <label><input type="radio" name="season" value="春" />春</label>
                                </li>

                                <li>
                                    <label><input type="radio" name="season" value="夏" />夏</label>
                                </li>

                                <li>
                                    <label><input type="radio" name="season" value="秋" />秋</label>
                                </li>

                                <li>
                                    <label><input type="radio" name="season" value="冬" />冬</label>
                                </li>
                            </ul>
                        </td>
                    </div><br>
                    <label>日時：</label>
                    <input type="datetime-local" id="datetime" name="datetime" value="2021-01-12T12:30" min="2021-01-01T00:00" max="2021-12-14T00:00"><br><br>
                    <div class="season">
                        <th>天気：</th>
                        <td>
                            <ul class="season">
                                <li>
                                    <label><input type="radio" name="weather" value="晴れ" />晴れ</label>
                                </li>

                                <li>
                                    <label><input type="radio" name="weather" value="雨" />雨</label>
                                </li>

                                <li>
                                    <label><input type="radio" name="weather" value="曇り" />曇り</label>
                                </li>

                                <li>
                                    <label><input type="radio" name="weather" value="雪" />雪</label>
                                </li>

                                <li>
                                    <label><input type="radio" name="weather" value="その他" />その他</label>
                                </li>
                            </ul>
                        </td>
                    </div><br>
                    <label for="temperature">気温：</label>
                    <input type="number" id="temperature" name="temperature" min="-60" max="60"><br><br>
                    <label>見つけた都道府県：<select name="pref_name">
                            <option value="" selected>都道府県</option>
                            <option value="北海道">北海道</option>
                            <option value="青森県">青森県</option>
                            <option value="岩手県">岩手県</option>
                            <option value="宮城県">宮城県</option>
                            <option value="秋田県">秋田県</option>
                            <option value="山形県">山形県</option>
                            <option value="福島県">福島県</option>
                            <option value="茨城県">茨城県</option>
                            <option value="栃木県">栃木県</option>
                            <option value="群馬県">群馬県</option>
                            <option value="埼玉県">埼玉県</option>
                            <option value="千葉県">千葉県</option>
                            <option value="東京都">東京都</option>
                            <option value="神奈川県">神奈川県</option>
                            <option value="新潟県">新潟県</option>
                            <option value="富山県">富山県</option>
                            <option value="石川県">石川県</option>
                            <option value="福井県">福井県</option>
                            <option value="山梨県">山梨県</option>
                            <option value="長野県">長野県</option>
                            <option value="岐阜県">岐阜県</option>
                            <option value="静岡県">静岡県</option>
                            <option value="愛知県">愛知県</option>
                            <option value="三重県">三重県</option>
                            <option value="滋賀県">滋賀県</option>
                            <option value="京都府">京都府</option>
                            <option value="大阪府">大阪府</option>
                            <option value="兵庫県">兵庫県</option>
                            <option value="奈良県">奈良県</option>
                            <option value="和歌山県">和歌山県</option>
                            <option value="鳥取県">鳥取県</option>
                            <option value="島根県">島根県</option>
                            <option value="岡山県">岡山県</option>
                            <option value="広島県">広島県</option>
                            <option value="山口県">山口県</option>
                            <option value="徳島県">徳島県</option>
                            <option value="香川県">香川県</option>
                            <option value="愛媛県">愛媛県</option>
                            <option value="高知県">高知県</option>
                            <option value="福岡県">福岡県</option>
                            <option value="佐賀県">佐賀県</option>
                            <option value="長崎県">長崎県</option>
                            <option value="熊本県">熊本県</option>
                            <option value="大分県">大分県</option>
                            <option value="宮崎県">宮崎県</option>
                            <option value="鹿児島県">鹿児島県</option>
                            <option value="沖縄県">沖縄県</option>
                        </select><br><br>
                        <label>見つけた場所：<select name="field">
                                <option value="" selected>場所</option>
                                <option value="山">山</option>
                                <option value="高山">高山</option>
                                <option value="雪山">雪山</option>
                                <option value="森">森</option>
                                <option value="野原">野原</option>
                                <option value="草原">草原</option>
                                <option value="葦原">葦原</option>
                                <option value="砂漠">砂漠</option>
                                <option value="海">海</option>
                                <option value="海岸">海岸</option>
                                <option value="湖">湖</option>
                                <option value="川">川</option>
                                <option value="池">池</option>
                                <option value="沼">沼</option>
                                <option value="町">町</option>
                                <option value="都市">都市</option>
                                <option value="公園">公園</option>
                                <option value="墓地">墓地</option>
                                <option value="畑">畑</option>
                                <option value="田んぼ">田んぼ</option>
                                <option value="高原">高原</option>
                                <option value="牧場">牧場</option>
                                <option value="動物園">動物園</option>
                                <option value="水族館">水族館</option>
                                <option value="ペットショップ">ペットショップ</option>
                                <option value="人家">人家</option>
                                <option value="丘">丘</option>
                                <option value="港">港</option>
                                <option value="その他">その他</option>
                            </select><br><br>
                            <div class="season">
                                <th>大きさ：</th>
                                <td>
                                    <ul class="season">
                                        <li>
                                            <label><input type="radio" name="size" value="スズメ大" />スズメ大</label>
                                        </li>

                                        <li>
                                            <label><input type="radio" name="size" value="ムクドリ大" />ムクドリ大</label>
                                        </li>

                                        <li>
                                            <label><input type="radio" name="size" value="ハト大" />ハト大</label>
                                        </li>

                                        <li>
                                            <label><input type="radio" name="size" value="カラス大" />カラス大</label>
                                        </li>
                                    </ul>
                                </td>
                            </div><br>
                            <div class="season">
                                <th>色：</th>
                                <td>
                                    <ul class="season">
                                        <li>
                                            <label><input type="checkbox" name="color" value="黒" />黒</label>
                                        </li>

                                        <li>
                                            <label><input type="checkbox" name="color" value="白" />白</label>
                                        </li>

                                        <li>
                                            <label><input type="checkbox" name="color" value="青" />青</label>
                                        </li>

                                        <li>
                                            <label><input type="checkbox" name="color" value="赤" />赤</label>
                                        </li>

                                        <li>
                                            <label><input type="checkbox" name="color" value="黄色" />黄色</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="color" value="緑色" />緑色</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="color" value="茶色" />茶色</label>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" name="color" value="その他" />その他</label>
                                        </li>
                                    </ul>
                                </td>
                            </div><br>
                            <label>鳥の名前：<input type="text" name="name" value=""></label><br><br>
                            <label>コメント：<textArea name="comment" rows="4" cols="40"></textArea></label><br><br>
                            <input id="button1" type="submit" value="登録">
                </fieldset>
            </div>
        </form>
    </main>

    <footer>
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="select.php">確認画面へ</a>
                        <a class="navbar-brand" href="index.php">ログアウト</a>
                    </div>
                </div>
            </nav>
        </header>
    </footer>


</body>

</html>