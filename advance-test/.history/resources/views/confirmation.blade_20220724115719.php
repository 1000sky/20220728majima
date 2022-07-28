<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advance-Test</title>
</head>
<body>
    <h1>内容確認</h1>
    <table>
        <tr>
            <th>お名前</th>
            <td>fullname</td>
        </tr>
        <tr>
            <th>性別</th>
            <td>gender</td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td>email</td>
        </tr>
        <tr>
            <th>郵便番号</th>
            <td>postcode</td>
        </tr>
        <tr>
            <th></th>
            <td></td>
        </tr>
        <tr>
            <th></th>
            <td></td>
        </tr>
            

            
        
            $table->char('postcode', 8)->nullable(false);
            $table->string('address',255)->nullable(false);
            $table->string('building_name',255);
            $table->text('opinion')->nullable(false);
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        
    </table>
    
</body>
</html>