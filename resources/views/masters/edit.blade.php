<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>地域マスタ登録</title>
<link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="container">
    <p>地域マスタ登録</p>
    <section>
        <form　method="post" action="{{ url('/masters/') }}">
        <p>地域コード
        <input type="text" name="prefecture_cd">
        </p>
        <p>地域名
        <input type="text" name="prefectureName">
        </p>
        <button type="submit" name="btnAction">登録</button>
        <button type="submit" name="btnBack" onclick="history.back()">戻る</button>
        </form>
    </section>
    </div>
</body>
</html>