<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advance-Test</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/contact.css" />
</head>
<body>
    <h1>お問い合わせ</h1>


    <form>
        <label>
            お名前 <input type="text"><p>例）山田</p><input type="text"><P>例）太郎</P>
        </label>
        <label>
            性別 
                <input type="radio"><label for="">男性</label>
                <input type="radio"><label for="">女性</label>
        </label>
        <label for="">
            メールアドレス <input type="text"><P>例）test@example.com</P>
        </label>
        <label for="">
            郵便番号　<div>〒</div> <input type="text"><p>例）123-4567</p>
        </label>
        <label for="">
            住所　<input type="text"><p>例）東京都渋谷区千駄ヶ谷1-2-3</p>
        </label>
        <label for="">
            建物　<input type="text"><p>例）千駄ヶ谷マンション101</p>
        </label>
        <label for="">
            ご意見　 <textarea name="textarea" cols="30" rows="10"></textarea>
        </label>


        <input type="button" value="確認">
 {{--       <!--同じページでリンク先が開く-->
<input type="button" value="リンク" onClick="location.href='http://google.com'">

 <!--新しいタブでリンク先が開く--> 
<input type="button" value="リンク" onClick="window.open('http://google.com')">
--}}

    </form>

    
</body>
</html>