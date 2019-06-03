<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>地域マスタ登録確認</title>
<link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="container">
    <p>地域マスタ登録確認</p>
    <section>
        <form method="post" action="{{ url('/') }}">
            {{ csrf_field() }}
        <p>地域コード
        <input type="hidden" name="prefecture_CD" value="{{ $masters['prefecture_CD'] }}">
        {{ $masters['prefecture_CD'] }}
        </p>
        <p>地域名
        <input type="hidden" name="prefectureName" value="{{ $masters['prefectureName'] }}">
        {{ $masters['prefectureName'] }}
        </p>
        <button type="submit" name="btnAction">登録</button>
        <button type="submit" name="btnBack" onclick="history.back()">戻る</button>
        </form>
    </section>
    </div>
</body>
</html>