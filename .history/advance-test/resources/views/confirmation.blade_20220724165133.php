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
    <h1>内容確認</h1>
    <table>
        @foreach ($items as $item)
        <tr>
            <th>お名前<span>※</span></th>
            <td>{{$item->fullname}}</td>
        </tr>
        <tr>
            <th>性別<span>※</span></th>
            <td>{{$item->}}gender</td>
        </tr>
        <tr>
            <th>メールアドレス<span>※</span></th>
            <td>{{$item->email}}</td>
        </tr>
        <tr>
            <th>郵便番号<span>※</span></th>
            <td>{{$item->postcode}}</td>
        </tr>
        <tr>
            <th>住所<span>※</span></th>
            <td>{{$item->address}}</td>
        </tr>
        <tr>
            <th>建物名</th>
            <td>{{$item->building_name}}</td>
        </tr>
        <tr>
            <th>ご意見<span>※</span></th>
            <td>{{$item->opinion}}</td>
        </tr>
        @endforeach
    </table>
    <button>送信</button>
    <div class=fix><a href="/"></a>修正する</div>
    
</body>
</html>