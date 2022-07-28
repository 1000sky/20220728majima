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
        <table>
            <tr>
                <th>お名前</th>
                <td><input type="text"></td>

                <th>性別</th>
                <td>
                  <input type="radio" checked="checked"><label for="">全て</label>
                  <input type="radio"><label for="">男性</label>
                  <input type="radio"><label for="">女性</label>
                </td>

            </tr>
            <tr>
                <th>登録日</th>
                <td>
                    <input type="date" min="created_at">~<input type="date" min="created_at">
                </td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>
                    <input type="text">
                </td>
            </tr>
            
        </table>
        <button>検索</button> 
        <div>リセット</div>


        {{ $items->links() }}
    
    
    
    </div>
</body>