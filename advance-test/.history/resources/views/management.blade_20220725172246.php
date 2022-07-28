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
    <h1>管理システム</h1>
    <div>
        <form action="management" method="POST">
            @csrf
        <table>
            <tr>
                <th>お名前</th>
                <td><input type="text" name="input" value="{{$input}}"></td>

                <th>性別</th>
                <td>
                  <input type="radio" checked="checked" value="{{$input}}"><label for="">全て</label>
                  <input type="radio" value="{{$input}}"><label for="">男性</label>
                  <input type="radio" value="{{$input}}"><label for="">女性</label>
                </td>

            </tr>
            <tr>
                <th>登録日</th>
                <td>
                    <input type="date" min="created_at" value="{{$input}}">~<input type="date" min="created_at" value="{{$input}}">
                </td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>
                    <input type="text" value="{{$input}}">
                </td>
            </tr>
            
        </table>
            <input type="submit" value="検索">
        </form>
        <div>リセット</div>


        {{ $items->links() }}


        <table>
            <tr>
                <th>ID</th>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>ご意見</th>
            </tr>
            {{-- <div>一本線</div> --}}
            @foreach ($items as $item)
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th><button>削除</button></th>
            </tr>
            @endforeach 
        </table>
    
    
    
    </div>
</body>