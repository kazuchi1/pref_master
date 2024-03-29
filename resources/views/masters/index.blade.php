<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>地域マスタ一覧</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="container">
        <div class="wrapContainer">
    地域マスタ一覧
            <div class="search">
                <form class="formSearch" method="post" action="">
                検索コード
                <input type="text" name="pref_code" >
                地域名
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
                        <form method="post" action="{{ url('/masters', $master->prefecture_cd) }}">
                        @csrf
                        {{ method_field('delete') }}
                        <td><button type="submit" name="btnUpdate" value="{{ $master->prefecture_cd }}">更新</button></td>
                        <td><button type="submit" name="btnDelete" value="{{ $master->prefecture_cd }}">削除</button></td>
                        </form>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="move">
                <div class="">
                {{ $masters->links() }}
                </div>
                <div><a class="add" href="/masters/edit">追加</a></div>
            </div>
        </div>
    </div>
</body>
</html>