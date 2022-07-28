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

    @if (count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>


    <form action="" method="POST">

      <table>
        @csrf
        <tr>
        <label>
            お名前 <input type="text" name="name"><p>例）山田</p><input type="text" name="name"><P>例）太郎</P>
        </label>
        </tr>

        @if ($errors->has('name'))
        <tr>
          <th>ERROR</th>
          <td>
            {{$errors->first('name')}}
          </td>
        </tr>
        @endif

        <tr>
        <label>
            性別 
                <input type="radio" checked="checked"><label for="">男性</label>
                <input type="radio"><label for="">女性</label>
        </label>
        </tr>

        <tr>
        <label for="">
            メールアドレス <input type="text"><P>例）test@example.com</P>
        </label>
        </tr>

        <tr>
        <label for="">
            郵便番号　<div>〒</div> <input type="text"><p>例）123-4567</p>
        </label>
        </tr>

        <tr>
        <label for="">
            住所　<input type="text" style="ime-mode:disabled;"><p>例）東京都渋谷区千駄ヶ谷1-2-3</p>
        </label>
        </tr>

        <tr>
        <label for="">
            建物　<input type="text"><p>例）千駄ヶ谷マンション101</p>
        </label>
        </tr>

        <tr>
        <label for="">
            ご意見　 <textarea name="textarea" cols="30" rows="10"></textarea>
        </label>
        </tr>
      </table>  


        <input type="button" value="確認">
 {{--       <!--同じページでリンク先が開く-->
<input type="button" value="リンク" onClick="location.href='http://google.com'">

 <!--新しいタブでリンク先が開く--> 
<input type="button" value="リンク" onClick="window.open('http://google.com')">
--}}


{{-- <FORM> 
    テキストボックス
    <input type="text" value="" onInput="checkForm(this)">
     
    テキストエリア
    <textarea rows="2" onInput="checkForm(this)"></textarea>
    </FORM>
     
    <script type="text/javascript">
    <!--
    function checkForm($this)
    {
        var str=$this.value;
        while(str.match(/[^A-Z^a-z\d\-]/))
        {
            str=str.replace(/[^A-Z^a-z\d\-]/,"");
        }
        $this.value=str;
    }
    //-->
    </script>
    
    --}}

    </form>

    
</body>
</html>