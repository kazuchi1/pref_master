<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>地域マスタ一覧</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="container">
        <div class="search">
        <form method="post" action="">
        <input type="text" name="pref_code" >
        <input type="text" name="pref_name" >
        <button type="submit" name="btn" value="search">検索</button>
        </form>
        </div>
        <table>
            <tr>
                <th>地域コード</th>
                <th>地域名</th>
                <th>更新日時</th>
                <th></th>
                <th></th>
            </tr>
            <tbody>
            @foreach($masters as $master)
                <tr>
                    <td>{{ $master->prefecture_cd }}</td>
                    <td>{{ $master->prefecture_name }}</td>
                    <td>{{ $master->update_date }}</td>
                    <td><button type="submit" name="update" value="{{ $master->prefecture_cd }}">登録</button></td>
                    <td><button type="submit" name="delete" value="{{ $master->prefecture_cd }}">削除</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>